

drop table if exists point cascade;
drop table if exists type cascade;
drop table if exists typepoint cascade;


/*==============================================================*/
/* Table : point                                    */
/*==============================================================*/
create table point (
   idpoint             		SERIAL               not null,
   point_nom              	VARCHAR(50)          null,
   point_description         VARCHAR(200)          null,
   point_periode          	VARCHAR(50)          null,
   point_rue        			VARCHAR(50)         null,
   point_complement        	VARCHAR(50)         null,
   point_cp               	VARCHAR(10)          null,
   point_ville            	VARCHAR(50)          null,
   point_latitude            FLOAT8          null,
   point_longitude           FLOAT8                 null,
   constraint PK_RSR primary key (idpoint)
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
/* Table : typepoint                                   */
/*==============================================================*/
create table typepoint (
   idtype             		    INT4          null,
   idpoint             		    INT4          null,
   typepoint_quantite		    INT4		  null,
   typepoint_quantite_estimee  INT4       null,
   constraint PK_RSR primary key (idtype, idpoint)
);








alter table typepoint
   add constraint FK_TYPSIT_TYP foreign key (idtype)
      references type (idtype)
      on delete restrict on update restrict;
create index IX_TYPSIT_TYP_ID ON typepoint(idtype);




alter table typepoint
   add constraint FK_TYPSIT_SIT foreign key (idpoint)
      references point (idpoint)
      on delete restrict on update restrict;
create index IX_TYPSIT_SIT_ID ON typepoint(idpoint);





