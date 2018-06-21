- git clone
- vagrant up
- cd /wpdistillery/ > bash wpdistillery.sh

- import bd
- change path

***** Q U E R I E S *****
- UPDATE t34am42_options SET option_value = REPLACE ( option_value, 'http://development.wp', 'http://custom.com' );
- UPDATE t34am42_posts SET guid = REPLACE ( guid, 'http://development.wp', 'http://custom.com' );
- UPDATE t34am42_posts SET post_content = REPLACE ( post_content, 'http://development.wp', 'http://custom.com' );
- UPDATE t34am42_postmeta SET meta_value = REPLACE ( meta_value, 'http://development.wp', 'http://custom.com' );



