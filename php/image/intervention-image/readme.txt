
Source:
	http://image.intervention.io/
	https://github.com/Intervention/image

Install
	$ composer require intervention/image

Use:
	$manager = new ImageManager();
	$manager->make(getcwd(). '/public/img/logo1.png')
		->resize(150, 125)
		// Insert wartermark
		->insert('public/logo.png')
		// Save new image
		->save(getcwd(). '/public/img/logo.png');