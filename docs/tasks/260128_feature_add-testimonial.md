# Ajouter un nouveau témoignage - Maria Iorio

## Contexte

Ajout d'un nouveau témoignage client sur la page d'accueil, dans la section "Témoignages".

## Objectifs

- [ ] Ajouter le témoignage de Maria Iorio dans la section reviews
- [ ] Ajouter l'image de profil (fournie par le client)

## Contenu du témoignage

**Nom**: Maria Iorio
**Titre**: Artiste/cinéaste, professeure à la haute école des arts de Berne (HKB)
**URL**: https://www.instagram.com/iorio.cuomo/

**Texte**:

> Lors de nos deux collaborations sur deux web sites pour des projets artistiques importants avec Benjamin Haeberli, il a fait preuve d'un professionnalisme exceptionnel et d'une très grande disponibilité pour agir, avec beaucoup de méticulosité et une éthique de travail rare. Benjamin Haeberli, sait travailler en équipe et faciliter le travail de ces mandataires en offrant des conseils adaptés aux situations spécifiquement. Son investissement et sa compréhension font de lui un collaborateur remarquable, que nous recommandons au plus haut point. Nous nous réjouissons de nos futures collaborations.

## Exigences

### Fonctionnelles

- Le témoignage doit apparaître dans la section "Témoignages" de la page d'accueil
- L'image doit être au format AVIF pour la performance
- Le style doit être cohérent avec les autres témoignages

### Techniques

- Image: format AVIF, dimensions similaires aux autres (100x100)
- Emplacement image: `/public/images/reviews/mariaiorio.avif`

## Implémentation

### Fichiers concernés

- `resources/views/templates/home.php:107-139` - Section témoignages

### Modification requise

Ajouter dans le tableau `reviews` de la section Testimonials:

```php
[
    'name' => 'Maria Iorio',
    'job' => 'Artiste/cinéaste, professeure HKB',
    'url' => 'https://www.instagram.com/iorio.cuomo/',
    'image_src' => '/images/reviews/mariaiorio.avif',
    'content' => "<p>Lors de nos deux collaborations sur deux web sites pour des projets artistiques importants avec Benjamin Haeberli, il a fait preuve d'un professionnalisme exceptionnel et d'une très grande disponibilité pour agir, avec beaucoup de méticulosité et une éthique de travail rare. Benjamin Haeberli, sait travailler en équipe et faciliter le travail de ces mandataires en offrant des conseils adaptés aux situations spécifiquement. Son investissement et sa compréhension font de lui un collaborateur remarquable, que nous recommandons au plus haut point. Nous nous réjouissons de nos futures collaborations.</p>",
],
```

### Étapes

1. Ajouter l'entrée dans le tableau reviews
2. Tester l'affichage

## Critères d'acceptation

- [ ] Image ajoutée au bon emplacement
- [ ] Témoignage visible sur la page d'accueil
- [ ] Style cohérent avec les autres témoignages
- [ ] Image chargée en lazy loading
- [ ] Lien vers le profil fonctionnel

## Notes

- Attendre l'image du client avant de finaliser
- Vérifier l'orthographe du nom (Haeberli vs Haerbli dans le texte original - à corriger)

---

**Créé le**: 2025-01-28
**Priorité**: Moyenne
**Type**: feature
