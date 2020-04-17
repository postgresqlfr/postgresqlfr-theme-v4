# postgresqlfr-theme-v4
Common Bootstrap Theme for the postgresql.fr platform

## Bases

* [Bootstrap](https://getbootstrap.com/): version 3.4.1
* [Bootswatch Theme Readable](https://bootswatch.com/3/readable/): version 3.4.1
* [Dokuwiki Bootstrap Template](https://www.dokuwiki.org/template:bootstrap3): v2020-04-04 


## Services / Environnements

Le theme doit être propagé sur 5 services en parallèle et disponbiles dans 2 
environements:

| Service | Outil     | testing                     | production            |
| ------- | --------- |---------------------------- | --------------------- |
| www     | dokuwiki  | testwww.postgresql.fr       | www.postgresql.fr     |
| blog    | jekyll    | testblog.postgresql.fr      | blog.postgresql.fr    |
| docs    | pgdocs_fr | testdocs.postgresql.fr      | docs.postgresql.fr    |
| forum   | fluxbb    | testforum.postgresql.fr     | forum.postgresql.fr   |
| planète | planet    | testplanete.postgresql.fr   | planete.postgresql.fr |

## Deploy

```bash
$ ENVIRONMENT=production
$ make deploy 
```


## Archives

Le thème v3 était éparpillé sur plusieurs dépots:

* dokuwiki: https://github.com/postgresqlfr/dokuwiki-template-tortoise
* doc: https://github.com/postgresqlfr/documentation_template_postgresql
* dotclear: https://github.com/postgresqlfr/dotclear-template-postgresql
* planet: https://github.com/postgresqlfr/planete.postgresql.fr
* topheader: https://github.com/postgresqlfr/topheader
* https://github.com/postgresqlfr/theme.postgresql.fr
