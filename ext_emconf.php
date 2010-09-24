<?php

########################################################################
# Extension Manager/Repository config file for ext "ke_dompdf".
#
# Auto generated 24-09-2010 11:14
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'ke DomPDF',
	'description' => 'DomPDF library and a small pi1 to show how to use DomPDF to render the current typo3-page to pdf',
	'category' => 'misc',
	'shy' => 0,
	'version' => '0.0.3',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'alpha',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Nadine Schwingler (kennziffer.com)',
	'author_email' => 'schwingler@kennziffer.com',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:314:{s:9:"ChangeLog";s:4:"4de7";s:10:"README.txt";s:4:"ee2d";s:21:"ext_conf_template.txt";s:4:"d41d";s:12:"ext_icon.gif";s:4:"b86a";s:17:"ext_localconf.php";s:4:"60a2";s:14:"doc/manual.sxw";s:4:"38c7";s:19:"doc/wizard_form.dat";s:4:"d83a";s:20:"doc/wizard_form.html";s:4:"7f5f";s:29:"pi1/class.tx_kedompdf_pi1.php";s:4:"93ba";s:19:"pi1/standard_ts.txt";s:4:"9076";s:17:"res/nurinhalt.css";s:4:"af71";s:18:"res/nurinhalt.html";s:4:"4212";s:23:"res/dompdf/LICENSE.LGPL";s:4:"3b57";s:21:"res/dompdf/dompdf.php";s:4:"7cae";s:32:"res/dompdf/dompdf_config.inc.php";s:4:"3238";s:24:"res/dompdf/load_font.php";s:4:"d377";s:46:"res/dompdf/include/absolute_positioner.cls.php";s:4:"3d4d";s:44:"res/dompdf/include/abstract_renderer.cls.php";s:4:"2183";s:47:"res/dompdf/include/attribute_translator.cls.php";s:4:"fe89";s:48:"res/dompdf/include/block_frame_decorator.cls.php";s:4:"8f33";s:47:"res/dompdf/include/block_frame_reflower.cls.php";s:4:"443d";s:43:"res/dompdf/include/block_positioner.cls.php";s:4:"87e1";s:41:"res/dompdf/include/block_renderer.cls.php";s:4:"6cfb";s:47:"res/dompdf/include/cached_pdf_decorator.cls.php";s:4:"8eac";s:33:"res/dompdf/include/canvas.cls.php";s:4:"f4ef";s:41:"res/dompdf/include/canvas_factory.cls.php";s:4:"cc09";s:34:"res/dompdf/include/cellmap.cls.php";s:4:"a40d";s:39:"res/dompdf/include/cpdf_adapter.cls.php";s:4:"5c01";s:36:"res/dompdf/include/css_color.cls.php";s:4:"df2d";s:33:"res/dompdf/include/dompdf.cls.php";s:4:"5753";s:43:"res/dompdf/include/dompdf_exception.cls.php";s:4:"ebc0";s:52:"res/dompdf/include/dompdf_internal_exception.cls.php";s:4:"38dd";s:28:"res/dompdf/include/file.skel";s:4:"a706";s:39:"res/dompdf/include/font_metrics.cls.php";s:4:"d587";s:32:"res/dompdf/include/frame.cls.php";s:4:"0fe3";s:42:"res/dompdf/include/frame_decorator.cls.php";s:4:"ba21";s:40:"res/dompdf/include/frame_factory.cls.php";s:4:"9993";s:41:"res/dompdf/include/frame_reflower.cls.php";s:4:"c0ad";s:37:"res/dompdf/include/frame_tree.cls.php";s:4:"875e";s:36:"res/dompdf/include/functions.inc.php";s:4:"a49a";s:37:"res/dompdf/include/gd_adapter.cls.php";s:4:"a29b";s:51:"res/dompdf/include/generated_frame_reflower.cls.php";s:4:"98f9";s:38:"res/dompdf/include/image_cache.cls.php";s:4:"3701";s:48:"res/dompdf/include/image_frame_decorator.cls.php";s:4:"4f4e";s:47:"res/dompdf/include/image_frame_reflower.cls.php";s:4:"bb05";s:41:"res/dompdf/include/image_renderer.cls.php";s:4:"09f8";s:49:"res/dompdf/include/inline_frame_decorator.cls.php";s:4:"ef9d";s:48:"res/dompdf/include/inline_frame_reflower.cls.php";s:4:"49d4";s:44:"res/dompdf/include/inline_positioner.cls.php";s:4:"5b68";s:42:"res/dompdf/include/inline_renderer.cls.php";s:4:"50a5";s:46:"res/dompdf/include/javascript_embedder.cls.php";s:4:"5f82";s:54:"res/dompdf/include/list_bullet_frame_decorator.cls.php";s:4:"6711";s:53:"res/dompdf/include/list_bullet_frame_reflower.cls.php";s:4:"e4e4";s:60:"res/dompdf/include/list_bullet_image_frame_decorator.cls.php";s:4:"b967";s:49:"res/dompdf/include/list_bullet_positioner.cls.php";s:4:"cdc8";s:47:"res/dompdf/include/list_bullet_renderer.cls.php";s:4:"0211";s:47:"res/dompdf/include/null_frame_decorator.cls.php";s:4:"d4cc";s:46:"res/dompdf/include/null_frame_reflower.cls.php";s:4:"0e7f";s:42:"res/dompdf/include/null_positioner.cls.php";s:4:"9e83";s:37:"res/dompdf/include/page_cache.cls.php";s:4:"648a";s:47:"res/dompdf/include/page_frame_decorator.cls.php";s:4:"4867";s:46:"res/dompdf/include/page_frame_reflower.cls.php";s:4:"fd4a";s:41:"res/dompdf/include/pdflib_adapter.cls.php";s:4:"464c";s:40:"res/dompdf/include/php_evaluator.cls.php";s:4:"c1bd";s:37:"res/dompdf/include/positioner.cls.php";s:4:"982a";s:35:"res/dompdf/include/renderer.cls.php";s:4:"4586";s:32:"res/dompdf/include/style.cls.php";s:4:"b1b1";s:37:"res/dompdf/include/stylesheet.cls.php";s:4:"a357";s:53:"res/dompdf/include/table_cell_frame_decorator.cls.php";s:4:"661b";s:52:"res/dompdf/include/table_cell_frame_reflower.cls.php";s:4:"138a";s:48:"res/dompdf/include/table_cell_positioner.cls.php";s:4:"6b02";s:46:"res/dompdf/include/table_cell_renderer.cls.php";s:4:"7842";s:48:"res/dompdf/include/table_frame_decorator.cls.php";s:4:"008b";s:47:"res/dompdf/include/table_frame_reflower.cls.php";s:4:"a846";s:52:"res/dompdf/include/table_row_frame_decorator.cls.php";s:4:"b158";s:51:"res/dompdf/include/table_row_frame_reflower.cls.php";s:4:"be02";s:58:"res/dompdf/include/table_row_group_frame_decorator.cls.php";s:4:"82f9";s:57:"res/dompdf/include/table_row_group_frame_reflower.cls.php";s:4:"a1b8";s:47:"res/dompdf/include/table_row_positioner.cls.php";s:4:"5a93";s:40:"res/dompdf/include/tcpdf_adapter.cls.php";s:4:"6141";s:47:"res/dompdf/include/text_frame_decorator.cls.php";s:4:"5297";s:46:"res/dompdf/include/text_frame_reflower.cls.php";s:4:"390b";s:40:"res/dompdf/include/text_renderer.cls.php";s:4:"bff8";s:28:"res/dompdf/lib/class.pdf.php";s:4:"e57e";s:37:"res/dompdf/lib/fonts/Courier-Bold.afm";s:4:"bccf";s:44:"res/dompdf/lib/fonts/Courier-BoldOblique.afm";s:4:"2fdb";s:40:"res/dompdf/lib/fonts/Courier-Oblique.afm";s:4:"c60f";s:32:"res/dompdf/lib/fonts/Courier.afm";s:4:"1645";s:39:"res/dompdf/lib/fonts/Helvetica-Bold.afm";s:4:"9031";s:46:"res/dompdf/lib/fonts/Helvetica-BoldOblique.afm";s:4:"db00";s:42:"res/dompdf/lib/fonts/Helvetica-Oblique.afm";s:4:"aa29";s:34:"res/dompdf/lib/fonts/Helvetica.afm";s:4:"c4d2";s:31:"res/dompdf/lib/fonts/Symbol.afm";s:4:"b4a0";s:35:"res/dompdf/lib/fonts/Times-Bold.afm";s:4:"c89e";s:41:"res/dompdf/lib/fonts/Times-BoldItalic.afm";s:4:"55d3";s:37:"res/dompdf/lib/fonts/Times-Italic.afm";s:4:"9e1d";s:36:"res/dompdf/lib/fonts/Times-Roman.afm";s:4:"dbdc";s:37:"res/dompdf/lib/fonts/ZapfDingbats.afm";s:4:"2cd8";s:50:"res/dompdf/lib/fonts/dompdf_font_family_cache.dist";s:4:"2b0b";s:34:"res/dompdf/lib/fonts/mustRead.html";s:4:"e501";s:43:"res/dompdf/lib/fonts/php_Helvetica-Bold.afm";s:4:"ca20";s:50:"res/dompdf/lib/fonts/php_Helvetica-BoldOblique.afm";s:4:"3f83";s:38:"res/dompdf/lib/fonts/php_Helvetica.afm";s:4:"3fa3";s:39:"res/dompdf/lib/fonts/php_Times-Bold.afm";s:4:"fe21";s:45:"res/dompdf/lib/fonts/php_Times-BoldItalic.afm";s:4:"3b40";s:41:"res/dompdf/lib/fonts/php_Times-Italic.afm";s:4:"6fa7";s:40:"res/dompdf/lib/fonts/php_Times-Roman.afm";s:4:"1311";s:35:"res/dompdf/lib/res/broken_image.png";s:4:"dbb5";s:27:"res/dompdf/lib/res/html.css";s:4:"be5f";s:33:"res/dompdf/lib/ttf2ufm/README.TXT";s:4:"e3d1";s:34:"res/dompdf/lib/ttf2ufm/ttf2ufm.exe";s:4:"4e6c";s:42:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/CHANGES";s:4:"d41d";s:47:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/CHANGES.html";s:4:"683b";s:44:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/COPYRIGHT";s:4:"d4fe";s:40:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/FONTS";s:4:"9a54";s:45:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/FONTS.hpux";s:4:"87c6";s:50:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/FONTS.hpux.html";s:4:"8fc9";s:45:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/FONTS.html";s:4:"7381";s:43:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/Makefile";s:4:"658d";s:41:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/README";s:4:"8003";s:47:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/README.FIRST";s:4:"1c8e";s:46:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/README.html";s:4:"eff4";s:40:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/bdf.c";s:4:"2ac3";s:43:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/bitmap.c";s:4:"eea6";s:46:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/byteorder.h";s:4:"1fc1";s:46:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/cygbuild.sh";s:4:"0fb5";s:39:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/ft.c";s:4:"5fb6";s:43:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/global.h";s:4:"4530";s:40:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/pt1.c";s:4:"9397";s:40:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/pt1.h";s:4:"95f7";s:45:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/runt1asm.c";s:4:"7a75";s:42:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/t1asm.c";s:4:"5f35";s:40:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/ttf.c";s:4:"6bb2";s:40:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/ttf.h";s:4:"d8a2";s:44:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/ttf2pt1.1";s:4:"0755";s:44:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/ttf2pt1.c";s:4:"bc85";s:52:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/ttf2pt1_convert.1";s:4:"e060";s:49:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/ttf2pt1_x2gs.1";s:4:"8268";s:42:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/ttf2ufm";s:4:"2390";s:44:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/version.h";s:4:"f05f";s:47:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/winbuild.bat";s:4:"2811";s:44:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/windows.h";s:4:"bd6d";s:51:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/RPM/Makefile";s:4:"5272";s:55:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/RPM/ttf2pt1.spec";s:4:"4a4b";s:59:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/RPM/ttf2pt1.spec.src";s:4:"64e7";s:49:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/TeX/README";s:4:"65aa";s:54:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/TeX/README.html";s:4:"8e2a";s:59:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/TeX/cjk-latex-config";s:4:"133a";s:61:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/TeX/cjk-latex-t1mapgen";s:4:"5a66";s:50:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/TeX/sfd2map";s:4:"4eb7";s:49:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/X11/README";s:4:"b0e9";s:54:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/X11/README.html";s:4:"049b";s:60:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/X11/t1-xf86.334.patch";s:4:"df15";s:59:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/X11/t1-xf86.39.patch";s:4:"3a83";s:56:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/netscape/Makefile";s:4:"1aa0";s:54:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/netscape/README";s:4:"d857";s:59:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/netscape/README.html";s:4:"1798";s:57:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/netscape/fontsz.cf";s:4:"6816";s:56:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/netscape/notscape";s:4:"6174";s:56:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/netscape/nsfilter";s:4:"aa2f";s:55:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/netscape/nsfix.c";s:4:"7f0d";s:52:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/netscape/nspr";s:4:"882f";s:55:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/netscape/nsprint";s:4:"352b";s:58:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/app/netscape/psfonts.cf";s:4:"4ead";s:51:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/README";s:4:"d0cc";s:56:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/README.html";s:4:"81bc";s:67:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/adobestd/adobe-std.tbl";s:4:"d41d";s:61:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/bulgarian/README";s:4:"6bef";s:70:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/bulgarian/encodings.alias";s:4:"b04b";s:67:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/bulgarian/ibm-1251.tbl";s:4:"ff38";s:66:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/bulgarian/ibm-866.tbl";s:4:"596e";s:68:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/bulgarian/iso8859-5.tbl";s:4:"c803";s:65:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/bulgarian/koi8-r.tbl";s:4:"500a";s:69:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/cyrillic/encodings.alias";s:4:"b04b";s:66:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/cyrillic/ibm-1251.tbl";s:4:"ff38";s:65:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/cyrillic/ibm-866.tbl";s:4:"596e";s:67:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/cyrillic/iso8859-5.tbl";s:4:"c803";s:64:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/cyrillic/koi8-r.tbl";s:4:"500a";s:65:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/latin1/iso8859-1.tbl";s:4:"d41d";s:65:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/latin2/iso8859-2.tbl";s:4:"d41d";s:61:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/latin4/iso8859-4";s:4:"d41d";s:65:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/latin4/iso8859-4.tbl";s:4:"d41d";s:61:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/latin5/iso8859-9";s:4:"d41d";s:59:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/russian/README";s:4:"6bef";s:68:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/russian/encodings.alias";s:4:"b04b";s:65:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/russian/ibm-1251.tbl";s:4:"ff38";s:64:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/russian/ibm-866.tbl";s:4:"596e";s:66:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/russian/iso8859-5.tbl";s:4:"c803";s:63:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/encodings/russian/koi8-r.tbl";s:4:"500a";s:50:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/maps/CP1250.map";s:4:"3608";s:50:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/maps/CP1251.map";s:4:"bd1b";s:55:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/maps/T2A_compact.map";s:4:"c606";s:67:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/maps/adobe-standard-encoding.map";s:4:"cd7b";s:53:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/maps/cubg5plus.map";s:4:"208a";s:50:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/maps/cubig5.map";s:4:"475c";s:48:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/maps/cugb.map";s:4:"2739";s:49:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/maps/cugbk.map";s:4:"d83e";s:49:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/maps/ubig5.map";s:4:"0cbe";s:47:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/maps/ugb.map";s:4:"f4cc";s:48:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/maps/ugbk.map";s:4:"6dff";s:58:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/maps/unicode-sample.map";s:4:"b6b6";s:49:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/other/Makefile";s:4:"1793";s:47:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/other/README";s:4:"7c85";s:52:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/other/README.html";s:4:"e447";s:50:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/other/bmpfont.h";s:4:"78a9";s:45:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/other/bz.c";s:4:"06ce";s:51:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/other/bzscreen.c";s:4:"e660";s:51:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/other/bzscreen.h";s:4:"0185";s:47:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/other/cmpf.c";s:4:"7ad2";s:52:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/other/cntstems.pl";s:4:"2c86";s:47:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/other/dmpf.c";s:4:"7260";s:47:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/other/lst.pl";s:4:"666b";s:47:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/other/showdf";s:4:"82f7";s:46:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/other/showg";s:4:"030b";s:50:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/scripts/convert";s:4:"4b62";s:61:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/scripts/convert.cfg.sample";s:4:"3057";s:51:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/scripts/forceiso";s:4:"d41f";s:50:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/scripts/frommap";s:4:"8ef3";s:51:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/scripts/html2man";s:4:"f053";s:51:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/scripts/inst_dir";s:4:"370c";s:52:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/scripts/inst_file";s:4:"620f";s:48:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/scripts/mkrel";s:4:"42ac";s:49:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/scripts/t1fdir";s:4:"0543";s:48:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/scripts/trans";s:4:"db19";s:49:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/scripts/unhtml";s:4:"daa7";s:47:"res/dompdf/lib/ttf2ufm/ttf2ufm-src/scripts/x2gs";s:4:"71d9";s:27:"res/dompdf/www/examples.php";s:4:"a4a5";s:23:"res/dompdf/www/foot.inc";s:4:"bd41";s:23:"res/dompdf/www/head.inc";s:4:"1a55";s:24:"res/dompdf/www/index.php";s:4:"a561";s:24:"res/dompdf/www/style.css";s:4:"4be8";s:34:"res/dompdf/www/images/arrow_01.gif";s:4:"5c61";s:34:"res/dompdf/www/images/arrow_02.gif";s:4:"110c";s:34:"res/dompdf/www/images/arrow_03.gif";s:4:"98c1";s:34:"res/dompdf/www/images/arrow_04.gif";s:4:"7284";s:34:"res/dompdf/www/images/arrow_05.gif";s:4:"a817";s:34:"res/dompdf/www/images/arrow_06.gif";s:4:"0a07";s:30:"res/dompdf/www/images/css2.png";s:4:"6f94";s:39:"res/dompdf/www/images/dompdf_simple.png";s:4:"e0e6";s:33:"res/dompdf/www/images/favicon.ico";s:4:"4e9b";s:33:"res/dompdf/www/images/favicon.png";s:4:"025b";s:31:"res/dompdf/www/images/h_bar.gif";s:4:"fa6b";s:36:"res/dompdf/www/images/left_arrow.gif";s:4:"5824";s:30:"res/dompdf/www/images/logo.png";s:4:"e269";s:30:"res/dompdf/www/images/logo.xcf";s:4:"cd61";s:42:"res/dompdf/www/images/php5-power-micro.png";s:4:"cd26";s:36:"res/dompdf/www/images/small_logo.png";s:4:"7351";s:33:"res/dompdf/www/images/star_01.gif";s:4:"ec19";s:33:"res/dompdf/www/images/star_02.gif";s:4:"d7fd";s:33:"res/dompdf/www/images/star_03.gif";s:4:"2ae7";s:33:"res/dompdf/www/images/star_04.gif";s:4:"6020";s:33:"res/dompdf/www/images/star_05.gif";s:4:"5675";s:31:"res/dompdf/www/images/title.gif";s:4:"e84b";s:31:"res/dompdf/www/images/v_bar.gif";s:4:"cc3f";s:33:"res/dompdf/www/images/xhtml10.png";s:4:"06a0";s:36:"res/dompdf/www/test/anchor_link.html";s:4:"5c67";s:41:"res/dompdf/www/test/background_image.html";s:4:"7e99";s:66:"res/dompdf/www/test/backgroundcolor_fontdecoration_pageborder.html";s:4:"f34a";s:33:"res/dompdf/www/test/baseline.html";s:4:"9852";s:37:"res/dompdf/www/test/block_height.html";s:4:"8adf";s:42:"res/dompdf/www/test/border_css_values.html";s:4:"507b";s:36:"res/dompdf/www/test/border_test.html";s:4:"99d5";s:27:"res/dompdf/www/test/br.html";s:4:"0ce7";s:37:"res/dompdf/www/test/center_table.html";s:4:"d200";s:32:"res/dompdf/www/test/demo_01.html";s:4:"1987";s:33:"res/dompdf/www/test/entities.html";s:4:"71bf";s:39:"res/dompdf/www/test/font_selection.html";s:4:"8ec8";s:33:"res/dompdf/www/test/gif_test.html";s:4:"04d2";s:40:"res/dompdf/www/test/html_attributes.html";s:4:"b135";s:30:"res/dompdf/www/test/image.html";s:4:"073d";s:39:"res/dompdf/www/test/image_variants.html";s:4:"bb85";s:39:"res/dompdf/www/test/important_flag.html";s:4:"c69f";s:35:"res/dompdf/www/test/javascript.html";s:4:"125b";s:36:"res/dompdf/www/test/large_table.html";s:4:"373a";s:31:"res/dompdf/www/test/latin1.html";s:4:"478f";s:34:"res/dompdf/www/test/long_table.php";s:4:"de13";s:31:"res/dompdf/www/test/margin.html";s:4:"c2c0";s:30:"res/dompdf/www/test/media.html";s:4:"c05e";s:39:"res/dompdf/www/test/multiple_class.html";s:4:"1dd8";s:29:"res/dompdf/www/test/nbsp.html";s:4:"a88e";s:37:"res/dompdf/www/test/nested_table.html";s:4:"5c87";s:30:"res/dompdf/www/test/pages.html";s:4:"0f5d";s:32:"res/dompdf/www/test/php_test.php";s:4:"cc52";s:31:"res/dompdf/www/test/remote.html";s:4:"32ae";s:34:"res/dompdf/www/test/simple_ul.html";s:4:"8891";s:32:"res/dompdf/www/test/special.html";s:4:"a550";s:32:"res/dompdf/www/test/symbols.html";s:4:"7ccd";s:30:"res/dompdf/www/test/table.html";s:4:"77b7";s:33:"res/dompdf/www/test/table_01.html";s:4:"a3f3";s:37:"res/dompdf/www/test/table_height.html";s:4:"a10c";s:36:"res/dompdf/www/test/table_image.html";s:4:"0e14";s:27:"res/dompdf/www/test/ul.html";s:4:"95d4";s:32:"res/dompdf/www/test/unicode.html";s:4:"c8cc";s:41:"res/dompdf/www/test/unicode_wrapping.html";s:4:"afe8";s:34:"res/dompdf/www/test/css/common.css";s:4:"d36f";s:37:"res/dompdf/www/test/css/importabs.css";s:4:"e745";s:37:"res/dompdf/www/test/css/importall.css";s:4:"e5db";s:41:"res/dompdf/www/test/css/importdisplay.css";s:4:"dcdc";s:39:"res/dompdf/www/test/css/importprint.css";s:4:"1cf1";s:37:"res/dompdf/www/test/css/importsub.css";s:4:"8a23";s:35:"res/dompdf/www/test/css/linkall.css";s:4:"0084";s:39:"res/dompdf/www/test/css/linkdefault.css";s:4:"44d4";s:39:"res/dompdf/www/test/css/linkdisplay.css";s:4:"98e2";s:37:"res/dompdf/www/test/css/linkprint.css";s:4:"1ffd";s:40:"res/dompdf/www/test/css/print_static.css";s:4:"097a";s:43:"res/dompdf/www/test/images/dokuwiki-128.png";s:4:"4eec";s:44:"res/dompdf/www/test/images/dompdf_simple.png";s:4:"50b4";s:41:"res/dompdf/www/test/images/goldengate.jpg";s:4:"a0d1";s:35:"res/dompdf/www/test/images/html.png";s:4:"9fb3";s:34:"res/dompdf/www/test/images/pdf.png";s:4:"bd52";s:34:"res/dompdf/www/test/images/php.gif";s:4:"614f";s:34:"res/dompdf/www/test/images/png.png";s:4:"2702";s:37:"res/dompdf/www/test/images/smiley.png";s:4:"5cf2";s:43:"res/dompdf/www/test/images/what_ordered.gif";s:4:"fdb0";}',
	'suggests' => array(
	),
);

?>