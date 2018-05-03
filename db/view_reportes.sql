-- show databases;
--
-- create database cakephp;
--

-- grant usage on xmf_casillas.* to xmf_casillas@localhost identified by '@xmf_casillas#';
-- grant select, insert, update, delete, drop, alter, create , create temporary tables on xmf_casillas.* to xmf_casillas@localhost;
-- grant file on *.* to 'xmf_casillas'@'localhost';
-- flush privileges;
-- SHOW GRANTS FOR 'xmf_casillas'@'localhost';
-- GRANT ALL PRIVILEGES ON *.* TO xmf_casillas@'localhost' -- with grant options;
-- flush privileges;


  -- ============================================================================================================= --
  -- =================================   Reports Casillas     =============================== --
  -- ============================================================================================================= --

  -- =================================   xmf_view_reporte_segundos_terceros   =============================== --

-- select * from xmf_casillas.`xmf_view_reporte_segundos_terceros`

use xmf_casillas_playa;



create or replace view `xmf_view_reporte_segundos_terceros`
as
with `report` as (
	select
			 `rpt`.xmf_casillas_id
			,`cas`.name
			,`rpt`.votantes_segundo
			,`rpt`.promovidos_segundo
			,`rpt`.votantes_tercero
			,`rpt`.promovidos_tercero
			,case
				when
					cast(`rpt`.created as time) between cast('00:00:00' as time) and cast('12:00:00' as time)
				then
					1
				else
					0
			end as 'is_twelve'
			,case
				when
					cast(`rpt`.created as time) between cast('00:00:00' as time) and cast('15:00:00' as time)
				then
					1
				else
					0
			end as 'is_thirdteen'
	from
			xmf_casillas.xmf_reports_segundo_tercero as `rpt`
	inner join
			xmf_casillas.xmf_casillas as `cas` on `cas`.id = `rpt`.xmf_casillas_id
	where
			`rpt`.xmf_casillas_id is not null
		and
			`rpt`.votantes_segundo is not null
		or
			`rpt`.votantes_tercero is not null
)
select
	 `xmf_casillas_id`
	,`name`
	,`votantes_segundo`
	,`promovidos_segundo`
	,`votantes_tercero`
	,`promovidos_tercero`
	,`is_twelve`
	,`is_thirdteen`
from
	`report`


  -- ============================================================================================================= --
  -- =================================   Reports Casillas     =============================== --
  -- ============================================================================================================= --



use xmf_casillas_playa

drop view `xmf_reaper`

create or replace view `xmf_reapers`
as
	select
 			 `cas`.id as 'casillas_index'
			,`cas`.name
-- 			,`cas`.description
			,`cas`.municipio
			,`cas`.seccion
-- 			,`cas`.clave_distrito
			,`cas`.clave_agrupamiento
			,`cas`.tipo_casilla
-- 			,`cas`.tipo_contigua
-- 			,`cas`.tipo_especial
			,`cas`.urbana
			,`cas`.distrito
			,`cas`.locacion
			,`cas`.hora_instalacion
			,`cas`.hora_inicio
			,`cas`.hora_cierre
-- 			,`cas`.created
-- 			,`cas`.modified
-- 			,`partition`.id
			,`partition`.nombre
			,`partition`.formula
			,`partition`.is_coalicion
			,`partition`.is_funcionario
			,`partition`.has_parent
			,`partition`.parent_id
-- 			,`partition`.description
-- 			,`partition`.created
-- 			,`partition`.modified
-- 			,`tvt`.id
			,`tvt`.tipo
-- 			,`tvt`.description
-- 			,`tvt`.created
-- 			,`tvt`.modified
			,`vts`.id						-- this id is the most
			,`vts`.xmf_casillas_id
			,`vts`.xmf_tipo_votaciones_id
			,`vts`.xmf_partidos_id
			,`vts`.votes
-- 			,`vts`.created
-- 			,`vts`.modified
	from
			`xmf_casillas`.`xmf_casillas` as `cas`
	inner join
			`xmf_casillas`.`xmf_partidos` as `partition`
	inner join
			`xmf_casillas`.`xmf_tipo_votaciones` as `tvt`
	left join
			`xmf_casillas`.`xmf_votes` as `vts` on `cas`.id = `vts`.xmf_casillas_id
		and
			`vts`.xmf_tipo_votaciones_id = `tvt`.id
		and
			`vts`.xmf_partidos_id = `partition`.id


  -- ============================================================================================================= --
  -- 										Primer grafica en last_result
  -- ============================================================================================================= --

select * from xmf_casillas_playa.xmf_partidos

use xmf_casillas_playa
-- Reference Querys

select
-- 		row_number() over(order by nombre ) as 'id'
-- 		casillas_index
-- 		,name
-- 		,municipio
-- 		,seccion
-- 		,clave_agrupamiento
-- 		,tipo_casilla
-- 		,urbana
-- 		,distrito
-- 		,locacion
-- 		,hora_instalacion
-- 		,hora_inicio
-- 		,hora_cierre
		 `reap`.nombre
-- 		,`reap`.formula
-- 		,is_coalicion
-- 		,is_funcionario
-- 		,has_parent
-- 		,parent_id
-- 		,`reap`.tipo
-- 		,id
-- 		,xmf_casillas_id
-- 		,`reap`.xmf_tipo_votaciones_id
-- 		,xmf_partidos_id
		,coalesce(sum(`reap`.votes),0) as 'votes'
-- 		,`box`.`order`
-- 		,`box`.`partition`
-- 		,`box`.`xmf_boxes_blocks_id`
from
		xmf_casillas_playa.xmf_reapers as `reap`
inner join 
		`xmf_casillas_playa`.`xmf_boxes_orders` as `box`
	on 
		`reap`.nombre = `box`.name and `box`.status = 1
inner join 
		`xmf_casillas_playa`.`xmf_tipo_votaciones` as `tipo`
	on 
		`box`.xmf_tipo_votaciones_id = `tipo`.id and `reap`.tipo = `tipo`.tipo
where
		`reap`.formula is not null
	and
		`reap`.formula not in ('')
	and 
		`reap`.tipo in (
						'Presidente'
-- 						'Senador'
-- 						'Diputado'
-- 						'Ayuntamiento'
					   )
group by
		`reap`.nombre
order by
		`box`.`order`
		
		
		
select upper(replace(name,'_',' ')) from `xmf_casillas_playa`.`xmf_boxes_orders` where `xmf_boxes_blocks_id` = 2		
	
-- 2nd graphics

select
--  	     `reap`.nombre
		replace(`reap`.formula,'-',' ') as 'formula'
-- 		,tipo
		,sum(`reap`.votes) as 'votes'
from
		xmf_casillas_playa.xmf_reapers as `reap`
inner join 
		`xmf_casillas_playa`.`xmf_boxes_orders` as `box`
	on 
		replace(`reap`.formula,'-',' ') = upper(replace(`box`.formula,'_',' ')) and `box`.`xmf_boxes_blocks_id` = 2 
	and	
		`reap`.nombre = `box`.name
inner join 
		`xmf_casillas_playa`.`xmf_tipo_votaciones` as `tipo`
	on 
		`box`.xmf_tipo_votaciones_id = `tipo`.id and `reap`.tipo = `tipo`.tipo
where
		`reap`.formula is not null
	and
		`reap`.formula not in ('')
	and
		`reap`.is_coalicion = 1
	and
		`box`.status = 1
	and 
		`reap`.tipo in (
-- 						'Presidente'
-- 						'Senador'
-- 						'Diputado'
						'Ayuntamiento'
					   )
group by
-- 		nombre,
		`reap`.formula -- ,tipo
	
		

-- 3rd graphics
select
-- 		 nombre
		formula
-- 		,tipo
		,sum(votes) as 'votes'
from
		xmf_casillas_playa.xmf_reapers
where
		formula is not null
	and
		formula not in ('')
	and
		is_coalicion = 0
	and
		has_parent = 0
	and
		is_funcionario = 1
group by
		formula

-- ---------------


create or replace table `xmf_casillas_playa`.`xmf_boxes_blocks` (
  `id` 				int unsigned not null auto_increment,
  `nombre` 			text DEFAULT NULL,
  `descripcion` 	text DEFAULT null,
  `block`			int unsigned null,
  `created` 		DATETIME,
  `modified` 		DATETIME,
   primary key (`id`)
  )engine=InnoDB default charset=utf8mb4;

insert into `xmf_casillas_playa`.`xmf_boxes_blocks` values 
													(null,'last_report','1st Coalitions',1,now(),now() ),
													(null,'last_report','2nd',2,now(),now() ),		
													(null,'last_report','3rd',3,now(),now() ),
													(null,'last_report','4th',4,now(),now() );

												
-- =========================================================================== --									
-- New Adds
-- =========================================================================== --

create or replace table `xmf_casillas_playa`.`xmf_boxes_orders` (
  `id` 						int unsigned NOT null auto_increment,
  `name` 					TEXT DEFAULT NULL,
  `formula` 				TEXT DEFAULT NULL,
  `descripcion` 			TEXT DEFAULT null,
  `xmf_partidos`	 		int unsigned null,
  `xmf_tipo_votaciones_id`	int unsigned null,
  `order`					int unsigned null,
  `partition`				int unsigned null,
  `xmf_boxes_blocks_id`		int unsigned null,
  `status`					bool not null default 1,
  `created` 				DATETIME,
  `modified` 				DATETIME,
   primary key (`id`)
  )engine=InnoDB default charset=utf8mb4;

insert into `xmf_casillas_playa`.`xmf_boxes_orders` values
													( null,'PAN-PRD-MC','','bloque-coaliciones',null,1,1,1,1,1,now(),now()),
													( null,'PRI-PVE-PANAL','','bloque-coaliciones',null,1,2,1,1,1,now(),now()),
													( null,'MORENA-PT-PES','','bloque-coaliciones',null,1,3,1,1,1,now(),now()),
													( null,'Bronco','','bloque-coaliciones',null,1,4,1,1,1,now(),now()),
													( null,'Margarita Zavala','','bloque-coaliciones',null,1,5,2,1,1,now(),now()),
													( null,'No Registrados','','bloque-coaliciones',null,1,6,2,1,1,now(),now()),
													( null,'Votos Nulos','','bloque-coaliciones',null,1,7,2,1,1,now(),now()),

													( null,'PAN-PRD-MC','','bloque-coaliciones',null,2,1,1,1,1,now(),now()),
													( null,'PRI-PVE-PANAL','','bloque-coaliciones',null,2,2,1,1,1,now(),now()),
													( null,'MORENA-PT-PES','','bloque-coaliciones',null,2,3,1,1,1,now(),now()),
													( null,'Bronco','','bloque-coaliciones',null,2,4,1,1,1,now(),now()),
													( null,'Margarita Zavala','','bloque-coaliciones',null,2,5,2,1,1,now(),now()),
													( null,'No Registrados','','bloque-coaliciones',null,2,6,2,1,1,now(),now()),
													( null,'Votos Nulos','','bloque-coaliciones',null,2,7,2,1,1,now(),now()),
													
													( null,'PAN-PRD-MC','','bloque-coaliciones',null,3,1,1,1,1,now(),now()),
													( null,'PRI-PVE-PANAL','','bloque-coaliciones',null,3,2,1,1,1,now(),now()),
													( null,'MORENA-PT-PES','','bloque-coaliciones',null,3,3,1,1,1,now(),now()),
													( null,'Bronco','','bloque-coaliciones',null,3,4,1,1,1,now(),now()),
													( null,'Margarita Zavala','','bloque-coaliciones',null,3,5,2,1,1,now(),now()),
													( null,'No Registrados','','bloque-coaliciones',null,3,6,2,1,1,now(),now()),
													( null,'Votos Nulos','','bloque-coaliciones',null,3,7,2,1,1,now(),now()),
													
													( null,'PAN-PRD-MC','','bloque-coaliciones',null,4,1,1,1,1,now(),now()),
													( null,'PRI-PVE-PANAL','','bloque-coaliciones',null,4,2,1,1,1,now(),now()),
													( null,'MORENA-PT','','bloque-coaliciones',null,4,3,1,1,1,now(),now()),
													( null,'No Registrados','','bloque-coaliciones',null,4,6,2,1,1,now(),now()),
													( null,'Votos Nulos','','bloque-coaliciones',null,4,7,2,1,1,now(),now())
													;
												
												
insert into `xmf_casillas_playa`.`xmf_boxes_orders`
with `in` as (
	select
			 nombre
			,replace(formula,'-',' ') as 'formula'
			,'only-coalition' as 'description'
			,null as 'xmf_partidos'
-- 			,`tipo`.id as 'xmf_tipo_votaciones_id'
			,row_number() over(order by formula) as 'order'
			,null as 'partition'
			,2 as 'xmf_boxes_blocks_id'
			,now() as 'created'
			,now() as 'modified'
	from
			xmf_casillas_playa.xmf_reapers
	where
			formula is not null
		and
			formula not in ('')
		and
			is_coalicion = 1
-- 		and tipo = 'Senador'
	group by
			nombre,formula
) 
select 
		 null
		,`insert`.nombre
		,`insert`.formula
		,`insert`.description
		,`insert`.xmf_partidos
		,`tipo`.id as 'xmf_tipo_votaciones_id'
		,`insert`.`order`
		,`insert`.`partition`
		,`insert`.xmf_boxes_blocks_id
		,1 as `status`
		,`insert`.created
		,`insert`.modified
from 
		`xmf_casillas_playa`.`xmf_tipo_votaciones` as `tipo`
inner join `in` as `insert`
		
		
update `xmf_casillas_playa`.`xmf_boxes_orders` set status = 0 where id in (34,38,42,46,27,28,29)

