## [🌐 SiteWeb - Projet BTS SIO](https://bariltomasdev.github.io/SiteWeb/)
### Bienvenue sur le dépôt du projet **SiteWeb**. Ce projet consiste en la création d'un site web dynamique réalisé dans le cadre de notre formation en informatique.

---
### 📝 À propos du projet

#### Ce projet a été développé pour démontrer nos compétences en développement web (Frontend et Backend) ainsi qu'en gestion de base de données. Il s'inscrit dans le cadre des Ateliers Professionnels du **BTS SIO**.

Le site propose les fonctionnalités suivantes :

  - **Interface Utilisateur** : Design responsive et ergonomique.
  - **Gestion Dynamique** : Affichage de contenu via une base de données.
  - **Formulaires** : Système de contact ou d'inscription sécurisé.
  - **Espace Administrateur** : (Si applicable) Gestion des contenus du site.

---

## 🛠️ Technologies utilisées

Le projet repose sur les technologies standards du web :

| **Catégorie** | **Technologies** |
| :--- | :--- |
| **Frontend** | ![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white) ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white) ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black) ![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white) |
| **Backend** | ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) ![Python](https://img.shields.io/badge/Python-3776AB?style=for-the-badge&logo=python&logoColor=white) |
| **Base de données** | ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white) |
| **Outils** | ![Visual Studio Code](https://img.shields.io/badge/VS_Code-0078D7?style=for-the-badge&logo=visualstudiocode&logoColor=white) |


## 📂 Structure prévue du projet (arborescence)

```text
SiteWeb/
├── 📂 assets/              # Ressources statiques du frontend
│   ├── 📂 css/             # Fichiers de styles (style.css, etc.)
│   ├── 📂 js/              # Scripts JavaScript côté client
│   ├── 📂 img/             # Images et icônes du site
│   └── 📂 fonts/           # Polices de caractères (typographie)
|
├── 📂 includes/            # Logique PHP (fichiers de traitement)
│   ├── 📄 db_connect.php   # Script de connexion à la base de données
│   └── 📄 functions.php    # Fonctions PHP réutilisables
|
├── 📂 scripts/             # Traitements backend spécifiques
│   └── 📄 logic.py         # Scripts Python (automatisation ou calculs)
|
├── 📂 sql/                 # Documentation et scripts de base de données
│   └── 📄 database.sql     # Export de la base de données (crucial pour l'examen)
|
├── 📄 .gitignore           # Fichiers à exclure du dépôt (mots de passe, logs)
├── 📄 index.php            # Point d'entrée principal du site
└── 📄 README.md            # Documentation globale du projet
```
---

## 🚀 Installation et Utilisation

Pour cloner et lancer ce projet localement :

1.  **Cloner le dépôt** :

    ```bash
    git clone https://github.com/BarilTomasDev/SiteWeb.git
    ```

2.  **Configurer l'environnement** :

      - Déplacez le dossier dans votre répertoire `htdocs` (XAMPP) ou `www` (WAMP).
      - Importez le fichier SQL fourni dans le dossier `/database` (si présent) vers votre interface phpMyAdmin.

3.  **Lancer le site** :

      - Ouvrez votre navigateur et accédez à `localhost/SiteWeb`.

-----

### 👥 Contributeurs

#### Ce projet a été réalisé par deux collaborateurs passionnés :
  **Tomas BARIL [@BarilTomasDev](https://github.com/BarilTomasDev) & Jason PREMCHAND [@jason-eu](https://github.com/jason-eu)**

### 🎓 Formation

##### Nous sommes actuellement étudiants en formation au **BTS SIO** (Services Informatiques aux Organisations).

##### Ce projet témoigne de notre apprentissage et de notre montée en compétences dans le domaine du développement informatique.

-----
###### 💡 Sources & Inspiration
- ###### Le développement de ce projet s'est appuyé sur de nombreuses sources d'inspiration. Nous avons consulté diverses documentations techniques, tutoriels et bibliothèques open-source pour concevoir une architecture robuste et une interface moderne. Ces ressources externes ont été essentielles pour nourrir notre réflexion et améliorer la qualité finale du site.

###### 📄 Licence
- ###### Ce projet est réalisé à des fins pédagogiques. Veuillez contacter les auteurs pour toute utilisation commerciale.
---
