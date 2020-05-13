Single Sign On
---

# Schéma général

Pour rappel tous les échanges sont effectués en https. (HTTP-2) C'est le premier niveau de sécurité ?

## Paramètres d'en-tête de la requête :

### Le broker


Le broker est en quelque sorte l'identifiant de l'application pour le client. Il est composé du nom du broker suivi d'un certificat pour un second niveau de sécurité dans les échanges. Il sert également de premier niveau de restriction territoriale sur les données.

```
Api-Id : l'identifiant du broker à utiliser : <name>@<certificate>
```
# Options

Sur le domaine on peut définir une durée maximale de session en minutes. Par défaut cette durée est de 60 minutes. Il n'existe pas de session infinie... Dans ce cas il est conseillé d'utiliser des cookies d'auto-login.

# TODO

* Limiter les cookies d'autologin et SSO à l'IP d'origine. Permettre aussi à l'utilisateur d'avoir un aperçu des IPs utilisant la même session.
