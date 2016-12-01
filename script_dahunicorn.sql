

drop table if exists site cascade;
drop table if exists type cascade;
drop table if exists typesite cascade;


/*==============================================================*/
/* Table : site                                    */
/*==============================================================*/
create table site (
   idsite             		SERIAL               not null,
   site_nom              	VARCHAR(50)          null,
   site_description         VARCHAR(200)          null,
   site_periode          	VARCHAR(50)          null,
   site_rue        			VARCHAR(50)         null,
   site_complement        	VARCHAR(50)         null,
   site_cp               	VARCHAR(10)          null,
   site_ville            	VARCHAR(50)          null,
   site_latitude            FLOAT8          null,
   site_longitude           FLOAT8                 null,
   constraint PK_RSR primary key (idsite)
);




/*==============================================================*/
/* Table : type                                    */
/*==============================================================*/
create table type (
   idtype             		SERIAL               not null,
   type_libelle             VARCHAR(50)          null,
   constraint PK_RSR primary key (idtype)
);




/*==============================================================*/
/* Table : typesite                                   */
/*==============================================================*/
create table typesite (
   idtype             		INT4          null,
   idsite             		INT4          null,
   typesite_quantite		INT4		  null,
   constraint PK_RSR primary key (idtype, idsite)
);








alter table typesite
   add constraint FK_TYPSIT_TYP foreign key (idtype)
      references type (idtype)
      on delete restrict on update restrict;
create index IX_TYPSIT_TYP_ID ON typesite(idtype);




alter table typesite
   add constraint FK_TYPSIT_SIT foreign key (idsite)
      references site (idsite)
      on delete restrict on update restrict;
create index IX_TYPSIT_SIT_ID ON typesite(idsite);





