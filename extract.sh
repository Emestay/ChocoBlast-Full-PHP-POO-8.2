#!/bin/bash

output_file="resultat.txt"

# Supprimer le fichier de sortie s'il existe déjà
if [ -f "$output_file" ]; then
  rm "$output_file"
fi

# Parcourir tous les fichiers .php et extraire les informations demandées
find . -type f -iname "*.php" | while read -r fichier; do
  echo "Route : $fichier" >> "$output_file"
  titre=$(grep -oP '(?<=<title>).*?(?=</title>)' "$fichier")
  if [ -z "$titre" ]; then
    echo "Titre : (non trouvé)" >> "$output_file"
  else
    echo "Titre : $titre" >> "$output_file"
  fi
  echo "Contenu du fichier :" >> "$output_file"
  cat "$fichier" >> "$output_file"
  echo -e "\n=========\n" >> "$output_file"
done

echo "Le résultat a été écrit dans le fichier $output_file"
