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

use xmf_casillas;



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



use xmf_casillas

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
		nombre
-- 		,formula
-- 		,is_coalicion
-- 		,is_funcionario
-- 		,has_parent
-- 		,parent_id
		,tipo
-- 		,id
-- 		,xmf_casillas_id
-- 		,xmf_tipo_votaciones_id
-- 		,xmf_partidos_id
		,coalesce(sum(votes),0) as 'votes'
from
		xmf_casillas.xmf_reapers
where
		formula is not null
	and
		formula not in ('')
group by
		nombre,tipo

-- 2nd graphics

select
		 nombre
		,formula
-- 		,tipo
		,sum(votes) as 'votes'
from
		xmf_casillas.xmf_reapers
where
		formula is not null
	and
		formula not in ('')
	and
		is_coalicion = 1
-- 	and
-- 		has_parent = 1
	and tipo = 'presidente'
group by
		nombre,formula -- ,tipo



-- 3rd graphics
select
-- 		 nombre
		formula
-- 		,tipo
		,sum(votes) as 'votes'
from
		xmf_casillas.xmf_reapers
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
