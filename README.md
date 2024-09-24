<p align="center"><a href="" target="_blank"><img src="{{asset('images/app-sewa.png')}}"  alt="App SEWA"></a></p>


## A propos de SEWA

SEWA ( Send Email With Attachement ) est une application web qui vous montrer comment envoyer des e-mails avec des pièces jointes dans Laravel. Tout en créant plusieurs authentifications avec breeze dans l'application.
Nous allons apprendre à joindre différents types de fichiers tels que des images, des PDF, des CSV, des ZIP, etc. Plongeons-nous dans le vif du sujet et améliorons nos capacités de messagerie électronique.
Pour ajouter des pièces jointes à un e-mail, vous devez ajouter des pièces jointes au tableau renvoyé par la méthode attachments du message. Ici, j'utiliserai Mailtrap à des fins de test, mais vous pouvez utiliser Mailtrap, Gmail ou selon votre convenance.

Pour l'authentification, nous ajouterons une colonne « type » dans la table des utilisateurs, où nous définirons trois types d'utilisateurs (utilisateur, agent et administrateur). Ensuite, nous créerons un middleware « rôle » pour vérifier les autorisations d'accès. Voyons donc les étapes ci-dessous pour créer un exemple complet pour l'authentification multiple.


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License
