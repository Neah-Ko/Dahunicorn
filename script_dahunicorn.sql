

drop table if exists lieu cascade;
drop table if exists type cascade;
drop table if exists typelieu cascade;


/*==============================================================*/
/* Table : lieu                                    */
/*==============================================================*/
create table lieu (
   idlieu             		MEDIUMINT               not null AUTO_INCREMENT,
   lieu_nom              	VARCHAR(50)          null,
   lieu_description         VARCHAR(200)          null,
   lieu_periode          	VARCHAR(50)          null,
   lieu_rue        			VARCHAR(50)         null,
   lieu_complement        	VARCHAR(50)         null,
   lieu_cp               	VARCHAR(10)          null,
   lieu_ville            	VARCHAR(50)          null,
   lieu_latitude            NUMERIC(8)          null,
   lieu_longitude           NUMERIC(8)                 null,
   constraint PK_RSR primary key (idlieu)
);




/*==============================================================*/
/* Table : type                                    */
/*==============================================================*/
create table type (
   idtype             		MEDIUMINT               not null AUTO_INCREMENT,
   type_libelle             VARCHAR(50)          null,
   constraint PK_RSR primary key (idtype)
);




/*==============================================================*/
/* Table : typelieu                                   */
/*==============================================================*/
create table typelieu (
   idtype             		    INT(4)          null,
   idlieu             		    INT(4)          null,
   typelieu_quantite		    INT(4)		  null,
   typelieu_quantite_estimee  INT(4)       null,
   constraint PK_RSR primary key (idtype, idlieu)
);








alter table typelieu
   add constraint FK_TYPSIT_TYP foreign key (idtype)
      references type (idtype)
      on delete restrict on update restrict;
create index IX_TYPSIT_TYP_ID ON typelieu(idtype);




alter table typelieu
   add constraint FK_TYPSIT_SIT foreign key (idlieu)
      references lieu (idlieu)
      on delete restrict on update restrict;
create index IX_TYPSIT_SIT_ID ON typelieu(idlieu);





