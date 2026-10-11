README — Mémo Administration Oracle Database
Référence personnelle — commandes et procédures courantes

Objet
Mémo personnel des commandes et procédures d'administration Oracle Database (installation, instance, PDB, Listener, RMAN). À réutiliser et compléter au fil des installations et projets, indépendamment d'un environnement précis.

Remarque : Les exemples ci-dessous utilisent XE / Oracle Linux comme illustration. Remplacer SID, chemins et noms de PDB selon l'environnement du moment.

1. Installation

Vérifier le système et l'espace disponible :
cat /etc/os-release
free -h
df -h

Télécharger et installer Oracle Database XE 21c :
cd /tmp
wget https://download.oracle.com/otn-pub/otn_software/db-express/oracle-database-xe-21c-1.0-1.ol8.x86_64.rpm
sudo dnf install -y libnsl bc unzip
sudo dnf install -y /tmp/oracle-database-xe-21c-1.0-1.ol8.x86_64.rpm
sudo /etc/init.d/oracle-xe-21c configure

Remarque : La configuration demande un mot de passe SYS/SYSTEM/PDBADMIN et prend 5 à 15 minutes.

Variables d'environnement :
export ORACLE_HOME=/opt/oracle/product/21c/dbhomeXE
export ORACLE_SID=XE
export PATH=$ORACLE_HOME/bin:$PATH
echo 'export ORACLE_HOME=/opt/oracle/product/21c/dbhomeXE' >> ~/.bashrc
echo 'export ORACLE_SID=XE' >> ~/.bashrc
echo 'export PATH=$ORACLE_HOME/bin:$PATH' >> ~/.bashrc
source ~/.bashrc

2. Droits d'accès SYSDBA

La connexion « sqlplus / as sysdba » nécessite que l'utilisateur Linux appartienne aux groupes dba et oinstall.

groups <utilisateur>
sudo usermod -aG dba <utilisateur>
sudo usermod -aG oinstall <utilisateur>

Remarque : Un changement de groupe est actif dans une nouvelle session. Utiliser « newgrp <groupe> » pour l'activer sans se déconnecter.

newgrp oinstall
newgrp dba
id

3. Gestion de l'instance

Connexion et vérification :
sqlplus / as sysdba
SELECT instance_name, status FROM v$instance;
SELECT name, open_mode FROM v$database;

Arrêt :
SHUTDOWN NORMAL;          — attend la déconnexion naturelle des utilisateurs
SHUTDOWN TRANSACTIONAL;  — attend la fin des transactions en cours
SHUTDOWN IMMEDIATE;      — arrêt propre, méthode recommandée
SHUTDOWN ABORT;          — arrêt brutal, à éviter sauf blocage

Démarrage :
STARTUP NOMOUNT;  — démarre l'instance sans monter la base
STARTUP MOUNT;    — monte le fichier de contrôle
STARTUP;          — démarrage complet, base accessible

4. Mode ARCHIVELOG

ARCHIVE LOG LIST;
SHUTDOWN IMMEDIATE;
STARTUP MOUNT;
ALTER DATABASE ARCHIVELOG;
ALTER DATABASE OPEN;

5. Listener

Processus réseau indépendant de l'instance, qui écoute les connexions entrantes et les redirige vers la base.

lsnrctl status
lsnrctl start
lsnrctl stop
lsnrctl reload
ps -ef | grep tnslsnr

Incident : erreur IPC (EXTPROC1521)
Cause : fichier socket résiduel avec permissions incorrectes.

sudo find /tmp /var/tmp -iname "*EXTPROC1521*" 2>/dev/null -exec ls -la {} \;
sudo rm -f /var/tmp/.oracle/sEXTPROC1521
lsnrctl stop
lsnrctl start

6. Bases enfichables (PDB)

Le CDB (XE) héberge plusieurs PDB indépendantes côté données, qui partagent la mémoire et les processus du conteneur.

SHOW PDBS;
ALTER SESSION SET CONTAINER = <nom_pdb>;
SHOW CON_NAME;
ALTER SESSION SET CONTAINER = CDB$ROOT;
ALTER PLUGGABLE DATABASE <nom_pdb> CLOSE;
ALTER PLUGGABLE DATABASE <nom_pdb> OPEN;

Création :
CREATE PLUGGABLE DATABASE testpdb ADMIN USER pdbadmin IDENTIFIED BY <mdp>
  FILE_NAME_CONVERT=('/opt/oracle/oradata/XE/pdbseed/','/opt/oracle/oradata/XE/testpdb/');
ALTER PLUGGABLE DATABASE testpdb OPEN;

Clonage :
ALTER PLUGGABLE DATABASE testpdb CLOSE;
ALTER PLUGGABLE DATABASE testpdb OPEN READ ONLY;
CREATE PLUGGABLE DATABASE testpdb2 FROM testpdb
  FILE_NAME_CONVERT=('/opt/oracle/oradata/XE/testpdb/','/opt/oracle/oradata/XE/testpdb2/');
ALTER PLUGGABLE DATABASE testpdb OPEN;
ALTER PLUGGABLE DATABASE testpdb2 OPEN;

Suppression :
ALTER PLUGGABLE DATABASE testpdb2 CLOSE;
DROP PLUGGABLE DATABASE testpdb2 INCLUDING DATAFILES;

7. Sauvegarde RMAN

rman target /
BACKUP SPFILE;                         — sauvegarde le fichier de paramètres
BACKUP CURRENT CONTROLFILE;            — sauvegarde le fichier de contrôle
BACKUP DATABASE PLUS ARCHIVELOG;       — sauvegarde complète
BACKUP PLUGGABLE DATABASE <nom_pdb>;   — sauvegarde d'une PDB
LIST BACKUP SUMMARY;                   — liste des sauvegardes

8. Restauration RMAN

rman target /
STARTUP FORCE MOUNT;
RESTORE DATABASE;
RECOVER DATABASE;
ALTER DATABASE OPEN;

Remarque : RESTORE DATABASE ne restaure pas le control file ni le spfile s'ils sont perdus — commandes séparées nécessaires.

Restauration d'un tablespace :
SQL 'ALTER TABLESPACE users OFFLINE';
RESTORE TABLESPACE users;
RECOVER TABLESPACE users;
SQL 'ALTER TABLESPACE users ONLINE';

9. Suppression complète d'une base

Méthode SQL*Plus :
SHUTDOWN IMMEDIATE;
STARTUP MOUNT EXCLUSIVE RESTRICT;
DROP DATABASE;

rm -rf /u01/app/oracle/fast_recovery_area/<SID>/
rm -f $ORACLE_HOME/dbs/spfile<SID>.ora
rm -f $ORACLE_HOME/dbs/orapw<SID>
sed -i "/^<SID>:/d" /etc/oratab
lsnrctl reload

Méthode DBCA (automatisée) :
dbca -silent -deleteDatabase -sourceDB <SID>

Remarque : Opération irréversible. Sauvegarder avant toute suppression.

10. Pannes courantes et solutions

ORA-01017 à la connexion SYSDBA       → utilisateur Linux absent du groupe dba
RMAN-06000, fichier .bsq introuvable  → utilisateur absent du groupe oinstall
ORA-01034, ORACLE not available       → instance non démarrée (STARTUP à relancer)
TNS-12541, no listener                → Listener non démarré (lsnrctl start)
NL-00280, erreur de log Listener      → permissions insuffisantes sur le dossier network/log
TNS-12555 sur IPC (EXTPROC1521)       → fichier socket résiduel dans /var/tmp/.oracle/, à supprimer

Remarque : Après un ajout à un groupe Linux (dba, oinstall), ouvrir une nouvelle session ou utiliser newgrp — un simple exit ne suffit pas toujours.

Récupération incomplète
RECOVER DATABASE UNTIL CANCEL;
