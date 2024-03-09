<p align="center"><a href="#" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## SeoHelper Laravel

#####

### Installation:

- composer require embit88/seohelper-laravel

- use SeoHelper;

#### META TAG:

- SeoHelper::setTitle($title) - Set Meta Title

- SeoHelper::setDescription($description) - Set Meta Description

- SeoHelper::setKeyword($keyword) - Set Meta Keyword

- SeoHelper::setMeta($title, $description, $keyword = null) - Set All Meta

- SeoHelper::getTitle() - Get Meta Title

- SeoHelper::getDescription() - Get Meta Description

- SeoHelper::getKeyword() - Get Meta Keyword

- SeoHelper::getMeta($key) - Get Meta $key

#### ROBOTS:

- SeoHelper::setRobots($key) - Set Robots

- SeoHelper::getRobots($key) - Get Robots

#### SOCIAL META:

- SeoHelper::setSocialMeta($type = 'website' $image = null) - Set Social Meta

- SeoHelper::getSocialMeta() - Get Social Meta HTML

#### BREADCRUMB:

- SeoHelper::setBreadcrumb($title, $href) - Set Breadcrumb

- SeoHelper::getBreadcrumb() - Get Breadcrumb

#### LINK LANGUAGES:

- SeoHelper::setLinkLang($href, $hreflang) - Set Link languages

- SeoHelper::getLinkLang() - Get Link languages

#### SEO TEXT:

- SeoHelper::setSeoText($seo_text) - Set seo text ("<\~%s\~>" - replace flag)
- SeoHelper::getSeoText($replace = '') - Get seo text ("<\~%s\~>" >>> var $replace)
