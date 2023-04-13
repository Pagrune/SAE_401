#!/bin/bash

# Vérification des droits root
if [ $(id -u) != 0 ]; then
	echo "Ce script nécessite des droits root. Merci de faire su ou sudo $0"
	exit 1
fi

# Vérification de la distribution
if $(which dpkg) -L apt  2>/dev/null | grep -q $(which apt-get); then
	echo "Système Debian ou Ubuntu - compatible avec le script"
else
	echo "Désolé, ce script est conçu pour une distribution Debian ou Ubuntu !"
	exit 1
fi

# Installation des paquets nécessaires s'ils ne sont pas déjà installés
echo "Installation ou mise à jour des paquets : apache2, php, unzip et links"
apt -qq update
apt -qq install apache2 php unzip links

# Récupération de l'archive depuis Github
echo "Téléchargement de l'archive depuis Github ..."
wget -q https://github.com/Pagrune/SAE_401/archive/refs/heads/master.zip

# Décompression de l'archive dans le répertoire www d'Apache
echo "Décompression de l'archive dans le répertoire www d'Apache ..."
unzip -q master.zip -d /var/www/

# Vérification de la réussite de l'installation
if [ $? -eq 0 ]; then
	echo "Installation réussie"
else
	echo "L'installation a échoué"
	exit 1
fi

# Changement des permissions sur le répertoire www
echo "Changement des permissions sur le répertoire www ..."
chown -R www-data:www-data /var/www/

echo "Le déploiement est terminé."
