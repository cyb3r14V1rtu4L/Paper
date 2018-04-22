ALTER TABLE xmf_casillas ADD COLUMN status CHAR(1) DEFAULT NULL;
ALTER TABLE xmf_casillas MODIFY hora_cierre TIME DEFAULT NULL;

INSERT INTO xmf_partidos
( nombre, formula, is_coalicion, has_parent, parent_id, is_funcionario, funcionario_name, funcionario_lastname, description, created, modified, bloque, orden)
VALUES( 'Coalicion Morena-Pt', 'coa_morena_pt', 1, 0, 0, 0, '', '', '', '2018-04-17 21:14:39.000', '2018-04-17 21:14:39.000', NULL, NULL);
