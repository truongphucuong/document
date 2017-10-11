
Source:
	http://image.intervention.io/
	https://github.com/Intervention/image

Install:
	$ composer require intervention/image

Use:
	$manager = new ImageManager();
	$manager->make(getcwd(). '/public/img/logo1.png')
		->resize(150, 125)
		// Insert wartermark
		->insert('public/logo.png')
		// Save new image
		->save(getcwd(). '/public/img/logo.png');


Method:
// Insert
	- 		http://image.intervention.io/api/insert
	- Syntax:
		insert(mixed $source, [string $position, [integer $x, integer $y]])
	- Parameters:
		+ Source
			> string - path image
			> string - url image
			> string - binary image data
			> string - base64 encoded image data
			> resource - PHP resource of type gd (when using GD driver)
			> object - Imagick instance (when using Imagick driver)
			> object - SqlFileInfo (To handle Laravel file uploads via Symfony\Component\HttpFoundation\File\UploadedFile)
		+ Positon (optional)
			> top-left (default)
			> top
			> top-right
			> left
			> center
			> right
			> bottom-left
			> bottom
			> bottom-right
		+ x (optional)
		+ y (optional)
	- Example:
		+ Insert watermark center
			->insert('logo.png', 'center')
		+ Insert watermark bottom right
			->insert('logo.png', 'bottom-right', 10, 10)
