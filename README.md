# Nova Vue Avatar

Vue Avatar (https://eliep.github.io/vue-avatar/) Field wrapper for Laravel Nova (https://nova.laravel.com/)

![Screenshot](https://maris.pro/img/github/nova-vue-avatars.png "Preview")

## Installation

`composer require marispro/nova-vue-avatar`

## Usage

```
<?php
namespace App\Nova;

use Marispro\NovaVueAvatar\NovaVueAvatar;

class User extends Resource
{
    public function fields(Request $request)
    {
        return [
            NovaVueAvatar::make('Name', 'Avatar'), // by default field - Name, column name - Avatar (not required parameters)
              ->rounded(false) // disable rounded corners (default: true)
              ->size(), // set avatar size (default: 40)
        ];
    }
}
```
