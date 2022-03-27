# Cài đặt code editor
- Ở đây chúng ta sẽ sử dụng phần mềm Sublime Text.
- Truy cập vào website: https://www.sublimetext.com/ và vào mục Download for Windows
- Sau khi cài đặt xong Sublime Text, chúng ta sẽ tiến hành cài các package dành cho Sublime Text
- Ở đây mình xin phép liệt kê các package dành cho Sublime Text.
	+ [Emmet](https://packagecontrol.io/packages/Emmet)
	+ [HTML5](https://packagecontrol.io/packages/HTML5)
	+ [CSS3](https://packagecontrol.io/packages/CSS3)
	+ [SideBarEnhancements](https://packagecontrol.io/packages/SideBarEnhancements)
	+ [CodeIgniter Utilities](https://packagecontrol.io/packages/CodeIgniter%20Utilities)
	+ [CodeIgniter Snippets](https://packagecontrol.io/packages/CodeIgniter%20Snippets)
	+ [View In Browser](https://packagecontrol.io/packages/View%20In%20Browser)
	+ [PHPSnippets](https://packagecontrol.io/packages/PHPSnippets)
# Cài đặt plugin cho MVC
- Đầu tiên bạn tải XAMPP rồi sau đó cài đặt bình thường.
- Tiếp theo bạn bật Apache và MySQL.
- Tiếp theo ta lại tải codeigniter web framework, bạn vào website: https://codeigniter.com/ chọn vào mục Download rồi bạn tải bản [v3](https://api.github.com/repos/bcit-ci/CodeIgniter/zipball/refs/tags/3.1.11) về.
- Bạn giải nén file mà bạn đã tải về.

Kết quả như sau:
![Codeigniter v3](https://i.imgur.com/9JdMxyU.png)
# Tinh chỉnh một số thứ
Sau khi cài đặt xong các package trên, chúng ta sẽ tinh chỉnh một số cấu hình như sau:

## View In Browser
- Bước 1: Vào Preferences -> Package Settings -> View In Browser -> Settings - Default.

Ở đây bạn sẽ thấy file json hiển thị như sau:
```json
{
	"posix": {
		"linux": {
			"firefox": "firefox -new-tab",
			"chrome": "google-chrome",
			"chrome64": "google-chrome",
			"chromium": "chromium"
		},
		"linux2": {
			"firefox": "firefox -new-tab",
			"chrome": "google-chrome",
			"chrome64": "google-chrome",
			"chromium": "chromium"
		},
		"darwin": {
			"firefox": "open -a \"/Applications/Firefox.app\"",
			"safari": "open -a \"/Applications/Safari.app\"",
			"chrome": "open -a \"/Applications/Google Chrome.app\"",
			"chrome64": "open -a \"/Applications/Google Chrome.app\"",
			"yandex": "open -a \"/Applications/Yandex.app\""
		}
	},
	"nt": {
		"win32": {
			"firefox": "C:\\Program Files\\Mozilla Firefox\\firefox.exe -new-tab",
			"iexplore": "C:\\Program Files\\Internet Explorer\\iexplore.exe",
			"chrome": "C:\\Program Files (x86)\\Google\\Chrome\\Application\\chrome.exe",
			"chrome64": "C:\\Program Files (x86)\\Google\\Chrome\\Application\\chrome.exe",
			"yandex": "%Local AppData%\\Yandex\\YandexBrowser\\browser.exe"
		}
	},

	"browser": "firefox"
}
```
- Chúng ta tiếp tục vào Preferences -> Package Settings -> View In Browser -> Settings - User, sửa browser thành chrome64.

```json
{
	"posix": {
		"linux": {
			"firefox": "firefox -new-tab",
			"chrome": "google-chrome",
			"chrome64": "google-chrome",
			"chromium": "chromium"
		},
		"linux2": {
			"firefox": "firefox -new-tab",
			"chrome": "google-chrome",
			"chrome64": "google-chrome",
			"chromium": "chromium"
		},
		"darwin": {
			"firefox": "open -a \"/Applications/Firefox.app\"",
			"safari": "open -a \"/Applications/Safari.app\"",
			"chrome": "open -a \"/Applications/Google Chrome.app\"",
			"chrome64": "open -a \"/Applications/Google Chrome.app\"",
			"yandex": "open -a \"/Applications/Yandex.app\""
		}
	},
	"nt": {
		"win32": {
			"firefox": "C:\\Program Files\\Mozilla Firefox\\firefox.exe -new-tab",
			"iexplore": "C:\\Program Files\\Internet Explorer\\iexplore.exe",
			"chrome": "C:\\Program Files (x86)\\Google\\Chrome\\Application\\chrome.exe",
			"chrome64": "C:\\Program Files (x86)\\Google\\Chrome\\Application\\chrome.exe",
			"yandex": "%Local AppData%\\Yandex\\YandexBrowser\\browser.exe"
		}
	},

	"browser": "chrome64"
}
```
## Config để vào được trình duyệt
Chúng ta sẽ vào xampp/htdocs
- Bạn copy thư mục này vào thư mục xampp/htdocs sau đó dán thư mục rồi đổi tên thư mục.
- Tiếp theo bạn vào thư mục đã đổi tên rồi vào application/config rồi bạn vào tệp config.php.
- Ở đây bạn chỉnh làm sao để mở được file PHP trên trình duyệt.

```php
$config['base_url'] = 'http://localhost/mvc';
$config['index_page'] = 'index.php';
```
- Lúc này bạn vào localhost/tên thư mục đã đổi ví dụ như

```
localhost/mvc
```
Nó sẽ ra kết quả
![Welcome to CodeIgniter](https://i.imgur.com/Ubo9QiO.png)
## Test emmet
- Bạn gõ ! thì sẽ ra cấu trúc html

```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
```
- Bạn gõ h2 tab một cái sẽ ra h2
- Thử gõ php thì sẽ ra cấu trúc của PHP
- Bạn gõ cimodel thì sẽ ra cấu trúc như sau:

```php
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelName extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

}

/* End of file  */
/* Location: ./application/models/ */
```
- Bạn gõ cicontroller sẽ ra kết quả như sau;

```php
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ControllerName extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

}

/* End of file  */
/* Location: ./application/controllers/ */
```
- Bạn gõ db_get thì sẽ ra như sau:

```php
public function ControllerName() {
	$this->db->get('Table', limit, offset);
}
```
- Bạn gõ db_select thì sẽ ra như sau:

```php
public function ControllerName() {
	$this->db->get('Table', limit, offset);
	$this->db->select('field1, field2');
}
```
- Bạn gõ load_view, load_model thì sẽ ra kết quả như sau:

```php
public function ControllerName() {
	$this->db->get('Table', limit, offset);
	$this->db->select('field1, field2');
	$this->load->model('Model File');
	$this->load->view('View File', $data, FALSE);
}
```