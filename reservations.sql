/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  01/04/2017 23:41:05                      */
/*==============================================================*/


drop table if exists administratives;

drop table if exists admins;

drop table if exists affectation_administrative;

drop table if exists archive_affectation_administratives;

drop table if exists archive_controles;

drop table if exists controles;

drop table if exists departements;

drop table if exists enseignants;

drop table if exists filieres;

drop table if exists locals;

drop table if exists matieres;

drop table if exists occupations;

/*==============================================================*/
/* Table : administratives                                      */
/*==============================================================*/
create table administratives
(
   id_administrative    int not null,
   nom                  varchar(50),
   prenom               varchar(50),
   telephone            numeric(15,0),
   email                varchar(255),
   etat                 bool,
   primary key (id_administrative)
);

/*==============================================================*/
/* Table : admins                                               */
/*==============================================================*/
create table admins
(
   id_admin             int not null,
   nom                  varchar(50),
   prenom               varchar(50),
   login                varchar(50),
   password             varchar(50),
   primary key (id_admin)
);

/*==============================================================*/
/* Table : affectation_administrative                           */
/*==============================================================*/
create table affectation_administrative
(
   id_affectation       int not null,
   id_controle          int not null,
   id_administrative    int not null,
   primary key (id_affectation)
);

/*==============================================================*/
/* Table : archive_affectation_administratives                  */
/*==============================================================*/
create table archive_affectation_administratives
(
   s                    int not null,
   id_archive_controle  int not null,
   primary key (s)
);

/*==============================================================*/
/* Table : archive_controles                                    */
/*==============================================================*/
create table archive_controles
(
   id_archive_controle  int not null,
   tranche              varchar(10),
   etat                 bool,
   jours                int,
   date                 date,
   groupe               varchar(20),
   primary key (id_archive_controle)
);

/*==============================================================*/
/* Table : controles                                            */
/*==============================================================*/
create table controles
(
   id_controle          int not null,
   id_local             int not null,
   id_filiere           int not null,
   id_matiere           varchar(255) not null,
   tranche              varchar(10),
   etat                 bool,
   jours                int,
   date                 date,
   groupe               varchar(20),
   primary key (id_controle)
);

/*==============================================================*/
/* Table : departements                                         */
/*==============================================================*/
create table departements
(
   id_departement       int not null,
   departement          varchar(255),
   primary key (id_departement)
);

/*==============================================================*/
/* Table : enseignants                                          */
/*==============================================================*/
create table enseignants
(
   id_enseignant        int not null,
   id_departement       int not null,
   nom                  varchar(50),
   prenom               varchar(50),
   telephone            numeric(15,0),
   email                varchar(255),
   login                varchar(50),
   password             varchar(50),
   primary key (id_enseignant)
);

/*==============================================================*/
/* Table : filieres                                             */
/*==============================================================*/
create table filieres
(
   id_filiere           int not null,
   libelle              varchar(255),
   primary key (id_filiere)
);

/*==============================================================*/
/* Table : locals                                               */
/*==============================================================*/
create table locals
(
   id_local             int not null,
   capacite             int,
   vedio_projecteur     bool,
   type                 int,
   primary key (id_local)
);

/*==============================================================*/
/* Table : matieres                                             */
/*==============================================================*/
create table matieres
(
   id_matiere           varchar(255) not null,
   id_filiere           int not null,
   matiere              varchar(255),
   primary key (id_matiere)
);

/*==============================================================*/
/* Table : occupations                                          */
/*==============================================================*/
create table occupations
(
   id_occupation        int not null,
   id_local             int not null,
   id_enseignant        int not null,
   id_filiere           int not null,
   id_matiere           varchar(255) not null,
   id_admin             int not null,
   tranche              varchar(10),
   etat                 bool,
   jours                int,
   date                 date,
   groupe               varchar(20),
   primary key (id_occupation)
);

alter table affectation_administrative add constraint fk_relation_7 foreign key (id_controle)
      references controles (id_controle) on delete restrict on update restrict;

alter table affectation_administrative add constraint fk_relation_8 foreign key (id_administrative)
      references administratives (id_administrative) on delete restrict on update restrict;

alter table archive_affectation_administratives add constraint fk_relation_14 foreign key (id_archive_controle)
      references archive_controles (id_archive_controle) on delete restrict on update restrict;

alter table controles add constraint fk_relation_11 foreign key (id_filiere)
      references filieres (id_filiere) on delete restrict on update restrict;

alter table controles add constraint fk_relation_15 foreign key (id_matiere)
      references matieres (id_matiere) on delete restrict on update restrict;

alter table controles add constraint fk_relation_9 foreign key (id_local)
      references locals (id_local) on delete restrict on update restrict;

alter table enseignants add constraint fk_relation_10 foreign key (id_departement)
      references departements (id_departement) on delete restrict on update restrict;

alter table matieres add constraint fk_relation_13 foreign key (id_filiere)
      references filieres (id_filiere) on delete restrict on update restrict;

alter table occupations add constraint fk_concerne foreign key (id_local)
      references locals (id_local) on delete restrict on update restrict;

alter table occupations add constraint fk_effectuer foreign key (id_admin)
      references admins (id_admin) on delete restrict on update restrict;

alter table occupations add constraint fk_relation_5 foreign key (id_filiere)
      references filieres (id_filiere) on delete restrict on update restrict;

alter table occupations add constraint fk_relation_6 foreign key (id_matiere)
      references matieres (id_matiere) on delete restrict on update restrict;

alter table occupations add constraint fk_reserver foreign key (id_enseignant)
      references enseignants (id_enseignant) on delete restrict on update restrict;

