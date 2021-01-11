# Nova Vue Avatar

[Vue Avatar](https://eliep.github.io/vue-avatar/) wrapper for [Laravel Nova](https://nova.laravel.com/)

![Screenshot](https://maris.pro/img/github/nova-vue-avatars.png "Preview")

## Installation

`composer require marispro/nova-vue-avatar`

## Usage

```
<?php
namespace App\Nova;

use Marispro\NovaVueAvatar\NovaVueAvatar as Avatar;

class User extends Resource
{
    public function fields()
    {
        return [
            Avatar::make('Name', 'Avatar'), // by default field - Name, column name - Avatar (optional)
              ->rounded(false) // disable rounded corners (optional, default: true)
              ->size() // set avatar size (optional, default: 40)
              ->image('https://eliep.github.io/vue-avatar/static/darth-vader.png'), // specify avatar as image (optional)
              ->color('#fff') // specify text color (optional, default: white)
        ];
    }
}
```

### Computed value

```
Avatar::make(function($user){
    return $user->firstname . '  ' . $user->lastname;
}),
```
