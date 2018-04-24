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
	
-- 	
-- 	select 
-- 			id
-- -- 			,name
-- -- 			,hora_inicio
-- 			,hora_instalacion
-- 			,hora_cierre
-- 			,status
-- 	from 
-- 			xmf_casillas.xmf_casillas
-- 	group by 
-- 			status
-- 			
-- 	
-- 	
-- 			
-- 
-- 			
-- 	select 
-- 			 count(id) as "install"
-- 			,status
-- 	from 
-- 			xmf_casillas.xmf_casillas
-- 	group by 
-- 			status

			
-- 	update
-- 		xmf_casillas.xmf_casillas	
-- 	set status = 'I'
-- 	where 
-- 			hora_instalacion is not null
-- 		or
-- 			hora_cierre is not null			

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	