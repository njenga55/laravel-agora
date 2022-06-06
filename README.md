# Generate Agora Server Side Token

generate server side tokens for agora in laravel.
### installation:
installation via composer.

```php
  composer require njenga55/agora
```

### Usage:
Laravel

Generate sdk token

```php
  Agora::sdkToken();

```

Generate Room token

```php
  Agora::roomToken();

```

Generate Task token

```php
  Agora::taskToken();

```

In some cases, as documented on the agora documentation, you might want to change the ability of your tokens.
To set the context from which you want to generate ur access token from use 

```php
  Agora::setToken();

 Agora::setContext([
            'role' => 'ADMINROLE',
            'uuid' => 'some-uuid-value-here-especially-for-tasks-and-room'
        ])
```
 where role can be either *ADMINROLE, WRITEROLE or READERROLE*

 then followed by either roomToken() or taskToken()

 ```php

$token = Agora::setContext([
            'role' => 'ADMINROLE',
            'uuid' => 'some-room--uuid'
        ])->roomToken()
 ```

  ```php

$token = Agora::setContext([
            'role' => 'ADMINROLE',
            'uuid' => 'some-task--uuid'
        ])->taskToken()
 ```
### Licence:
MIT
