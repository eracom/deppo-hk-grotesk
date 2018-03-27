# Deppo HK Grotesk

Corrige un bug de Deppo: 
  
Le chemin du CSS deppo-font-enqueue est faux si on utilise un thème enfant, il pointe vers le style enfant. 

Résultat: le lien est cassé (erreur 404) et la fonte HK Grotesk ne charge pas.

Cette extension corrige le lien.