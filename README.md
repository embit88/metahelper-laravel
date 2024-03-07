<p align="center"><a href="#" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## MetaHelper Laravel

#####

### Installation:

- composer require embit88/metahelper-laravel

- use MetaHelper;

#### Set meta:

- MetaHelper::setTitle($string) - Set Meta Title

- MetaHelper::setDescription($string) - Set Meta Description

- MetaHelper::setKeyword($string) - Set Meta Keyword

- MetaHelper::setMeta($title, $description, $keyword = null) - Set All Meta

#### Get meta:

- MetaHelper::getTitle() - Get Meta Title

- MetaHelper::getDescription() - Get Meta Description

- MetaHelper::getKeyword() - Get Meta Keyword

- MetaHelper::getMeta($key) - Get Meta $key

