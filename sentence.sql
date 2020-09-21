CREATE TABLE tbl_empresa (
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(100) DEFAULT 'NameEmpres',
	direccion TEXT DEFAULT 'SD',
	siglas TEXT DEFAULT 'N&E',
	mision TEXT DEFAULT 'Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.',
	vision TEXT DEFAULT 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.',
	nosot TEXT DEFAULT 'Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.',
	celular VARCHAR(15) DEFAULT "593000000000",
	telefono VARCHAR(10) DEFAULT "2955788",
	logo TEXT NOT NULL DEFAULT 'public/images/pic01.jpg',
	email TEXT DEFAULT 'email@empresa.com',
	hatencion TEXT DEFAULT 'L a S: 08:00 a 16:00',
	pagefb TEXT DEFAULT '',
	pagetw TEXT DEFAULT '',
	pageig TEXT DEFAULT '',
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;;

INSERT INTO tbl_empresa VALUES ();

SELECT id_producto,p.nombre,stock,pvp,caracteristicas,imagen, c.id_categoria,c.nombre as categoria,m.nombre as marca 
	FROM tbl_producto as p, tbl_marca as m, tbl_categoria as c 
	WHERE p.id_categoria = c.id_categoria AND p.id_marca = m.id_marca ; 

 SELECT id_producto,p.nombre,stock,pvp,caracteristicas,imagen, c.id_categoria,c.nombre as categoria,m.nombre as marca
    FROM tbl_producto as p INNER JOIN tbl_marca as m ON p.id_marca = m.id_marca
    INNER JOIN tbl_categoria as c ON p.id_categoria = c.id_categoria WHERE p.id_categoria = 1;
	

UPDATE tbl_empresa SET
	nombre='', direccion='', siglas='', mision='', vision='',nosot='', celular='',telefono = '', logo='',
 	email='', hatencion='', pagefb='',pagetw='',pageig=''
  	WHERE tbl_empresa.id = 1;