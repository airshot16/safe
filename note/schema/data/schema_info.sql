SELECT table_name, table_comment FROM INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'test';

SELECT TABLE_NAME
  , (SELECT TABLE_COMMENT FROM INFORMATION_SCHEMA.TABLES
     WHERE TABLE_SCHEMA = 'test'
     and table_name = a.table_name) TABLE_COMMENT
  , COLUMN_NAME, DATA_TYPE, CHARACTER_MAXIMUM_LENGTH, COLUMN_COMMENT, COLUMN_KEY, IS_NULLABLE, COLUMN_DEFAULT  FROM INFORMATION_SCHEMA.COLUMNS a
-- , COLUMN_TYPE
WHERE TABLE_SCHEMA = 'test'
and TABLE_NAME not like 'tmp%' 
and TABLE_NAME not in ('v_cm_cd_attr');
-- AND TABLE_NAME = 'cm_auth_grp';
     
