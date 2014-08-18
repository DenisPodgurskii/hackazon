<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Controller\\About' => $baseDir . '/classes/App/Controller/About.php',
    'App\\Controller\\Account' => $baseDir . '/classes/App/Controller/Account.php',
    'App\\Controller\\Auth' => $baseDir . '/classes/App/Controller/Auth.php',
    'App\\Controller\\Blog' => $baseDir . '/classes/App/Controller/Blog.php',
    'App\\Controller\\Cart' => $baseDir . '/classes/App/Controller/Cart.php',
    'App\\Controller\\Category' => $baseDir . '/classes/App/Controller/Category.php',
    'App\\Controller\\Checkout' => $baseDir . '/classes/App/Controller/Checkout.php',
    'App\\Controller\\Contact' => $baseDir . '/classes/App/Controller/Contact.php',
    'App\\Controller\\Error' => $baseDir . '/classes/App/Controller/Error.php',
    'App\\Controller\\Facebook' => $baseDir . '/classes/App/Controller/Facebook.php',
    'App\\Controller\\Faq' => $baseDir . '/classes/App/Controller/Faq.php',
    'App\\Controller\\Home' => $baseDir . '/classes/App/Controller/Home.php',
    'App\\Controller\\Page' => $baseDir . '/classes/App/Controller/Page.php',
    'App\\Controller\\Product' => $baseDir . '/classes/App/Controller/Product.php',
    'App\\Controller\\Review' => $baseDir . '/classes/App/Controller/Review.php',
    'App\\Controller\\Search' => $baseDir . '/classes/App/Controller/Search.php',
    'App\\Controller\\Twitter' => $baseDir . '/classes/App/Controller/Twitter.php',
    'App\\Controller\\User' => $baseDir . '/classes/App/Controller/User.php',
    'App\\Controller\\Wishlist' => $baseDir . '/classes/App/Controller/Wishlist.php',
    'App\\Core\\Request' => $baseDir . '/classes/App/Core/Request.php',
    'App\\Core\\View' => $baseDir . '/classes/App/Core/View.php',
    'App\\Core\\View\\Helper' => $baseDir . '/classes/App/Core/View/Helper.php',
    'App\\DataImport\\BestBuyReviewImporter' => $baseDir . '/classes/App/DataImport/BestBuyReviewImporter.php',
    'App\\Debug' => $baseDir . '/classes/App/Debug.php',
    'App\\Exception\\Forbidden' => $baseDir . '/classes/App/Exception/Forbidden.php',
    'App\\Exception\\ForbiddenException' => $baseDir . '/classes/App/Exception/ForbiddenException.php',
    'App\\Exception\\HttpException' => $baseDir . '/classes/App/Exception/HttpException.php',
    'App\\Exception\\InternalErrorException' => $baseDir . '/classes/App/Exception/InternalErrorException.php',
    'App\\Exception\\NotFoundException' => $baseDir . '/classes/App/Exception/NotFoundException.php',
    'App\\Helpers\\ArraysHelper' => $baseDir . '/classes/App/Helpers/ArraysHelper.php',
    'App\\Model\\BaseModel' => $baseDir . '/classes/App/Model/BaseModel.php',
    'App\\Model\\Cart' => $baseDir . '/classes/App/Model/Cart.php',
    'App\\Model\\CartItems' => $baseDir . '/classes/App/Model/CartItems.php',
    'App\\Model\\Category' => $baseDir . '/classes/App/Model/Category.php',
    'App\\Model\\ContactMessages' => $baseDir . '/classes/App/Model/ContactMessages.php',
    'App\\Model\\CustomerAddress' => $baseDir . '/classes/App/Model/CustomerAddress.php',
    'App\\Model\\Faq' => $baseDir . '/classes/App/Model/Faq.php',
    'App\\Model\\Model' => $baseDir . '/classes/App/Model/Model.php',
    'App\\Model\\Option' => $baseDir . '/classes/App/Model/Option.php',
    'App\\Model\\OptionValue' => $baseDir . '/classes/App/Model/OptionValue.php',
    'App\\Model\\Order' => $baseDir . '/classes/App/Model/Order.php',
    'App\\Model\\OrderAddress' => $baseDir . '/classes/App/Model/OrderAddress.php',
    'App\\Model\\OrderItems' => $baseDir . '/classes/App/Model/OrderItems.php',
    'App\\Model\\Product' => $baseDir . '/classes/App/Model/Product.php',
    'App\\Model\\Review' => $baseDir . '/classes/App/Model/Review.php',
    'App\\Model\\SpecialOffers' => $baseDir . '/classes/App/Model/SpecialOffers.php',
    'App\\Model\\User' => $baseDir . '/classes/App/Model/User.php',
    'App\\Model\\WishList' => $baseDir . '/classes/App/Model/Wishlist.php',
    'App\\Model\\WishListFollowers' => $baseDir . '/classes/App/Model/WishListFollowers.php',
    'App\\Model\\WishListItem' => $baseDir . '/classes/App/Model/WishListItem.php',
    'App\\Page' => $baseDir . '/classes/App/Page.php',
    'App\\Pixie' => $baseDir . '/classes/App/Pixie.php',
    'App\\SearchFilters\\BaseFilter' => $baseDir . '/classes/App/SearchFilters/BaseFilter.php',
    'App\\SearchFilters\\BrandFilter' => $baseDir . '/classes/App/SearchFilters/BrandFilter.php',
    'App\\SearchFilters\\FilterFabric' => $baseDir . '/classes/App/SearchFilters/FilterFabric.php',
    'App\\SearchFilters\\NameFilter' => $baseDir . '/classes/App/SearchFilters/NameFilter.php',
    'App\\SearchFilters\\PriceFilter' => $baseDir . '/classes/App/SearchFilters/PriceFilter.php',
    'App\\SearchFilters\\QualityFilter' => $baseDir . '/classes/App/SearchFilters/QualityFilter.php',
    'PHPixie\\Auth' => $vendorDir . '/phpixie/auth/classes/PHPixie/Auth.php',
    'PHPixie\\Auth\\Controller\\Facebook' => $vendorDir . '/phpixie/auth/classes/PHPixie/Auth/Controller/Facebook.php',
    'PHPixie\\Auth\\Controller\\Twitter' => $vendorDir . '/phpixie/auth/classes/PHPixie/Auth/Controller/Twitter.php',
    'PHPixie\\Auth\\Login\\Facebook' => $vendorDir . '/phpixie/auth/classes/PHPixie/Auth/Login/Facebook.php',
    'PHPixie\\Auth\\Login\\Password' => $vendorDir . '/phpixie/auth/classes/PHPixie/Auth/Login/Password.php',
    'PHPixie\\Auth\\Login\\Provider' => $vendorDir . '/phpixie/auth/classes/PHPixie/Auth/Login/Provider.php',
    'PHPixie\\Auth\\Login\\Twitter' => $vendorDir . '/phpixie/auth/classes/PHPixie/Auth/Login/Twitter.php',
    'PHPixie\\Auth\\Role\\Driver' => $vendorDir . '/phpixie/auth/classes/PHPixie/Auth/Role/Driver.php',
    'PHPixie\\Auth\\Role\\Field' => $vendorDir . '/phpixie/auth/classes/PHPixie/Auth/Role/Field.php',
    'PHPixie\\Auth\\Role\\Relation' => $vendorDir . '/phpixie/auth/classes/PHPixie/Auth/Role/Relation.php',
    'PHPixie\\Auth\\Service' => $vendorDir . '/phpixie/auth/classes/PHPixie/Auth/Service.php',
    'PHPixie\\Config' => $vendorDir . '/phpixie/core/classes/PHPixie/Config.php',
    'PHPixie\\Controller' => $vendorDir . '/phpixie/core/classes/PHPixie/Controller.php',
    'PHPixie\\Cookie' => $vendorDir . '/phpixie/core/classes/PHPixie/Cookie.php',
    'PHPixie\\DB' => $vendorDir . '/phpixie/db/classes/PHPixie/DB.php',
    'PHPixie\\DB\\Connection' => $vendorDir . '/phpixie/db/classes/PHPixie/DB/Connection.php',
    'PHPixie\\DB\\Expression' => $vendorDir . '/phpixie/db/classes/PHPixie/DB/Expression.php',
    'PHPixie\\DB\\Mysql\\Connection' => $vendorDir . '/phpixie/db/classes/PHPixie/DB/Mysql/Connection.php',
    'PHPixie\\DB\\Mysql\\Query' => $vendorDir . '/phpixie/db/classes/PHPixie/DB/Mysql/Query.php',
    'PHPixie\\DB\\Mysql\\Result' => $vendorDir . '/phpixie/db/classes/PHPixie/DB/Mysql/Result.php',
    'PHPixie\\DB\\PDOV\\Connection' => $baseDir . '/classes/PDOV/Connection.php',
    'PHPixie\\DB\\PDOV\\Query' => $baseDir . '/classes/PDOV/Query.php',
    'PHPixie\\DB\\PDOV\\Result' => $baseDir . '/classes/PDOV/Result.php',
    'PHPixie\\DB\\PDO\\Connection' => $vendorDir . '/phpixie/db/classes/PHPixie/DB/PDO/Connection.php',
    'PHPixie\\DB\\PDO\\Query' => $vendorDir . '/phpixie/db/classes/PHPixie/DB/PDO/Query.php',
    'PHPixie\\DB\\PDO\\Result' => $vendorDir . '/phpixie/db/classes/PHPixie/DB/PDO/Result.php',
    'PHPixie\\DB\\Query' => $vendorDir . '/phpixie/db/classes/PHPixie/DB/Query.php',
    'PHPixie\\DB\\Result' => $vendorDir . '/phpixie/db/classes/PHPixie/DB/Result.php',
    'PHPixie\\Debug' => $vendorDir . '/phpixie/core/classes/PHPixie/Debug.php',
    'PHPixie\\Email' => $vendorDir . '/phpixie/email/classes/PHPixie/Email.php',
    'PHPixie\\Exception\\PageNotFound' => $vendorDir . '/phpixie/core/classes/PHPixie/Exception/PageNotFound.php',
    'PHPixie\\ORM' => $vendorDir . '/phpixie/orm/classes/PHPixie/ORM.php',
    'PHPixie\\ORM\\Extension' => $vendorDir . '/phpixie/orm/classes/PHPixie/ORM/Extension.php',
    'PHPixie\\ORM\\Extension\\Nested' => $vendorDir . '/phpixie/orm/classes/PHPixie/ORM/Extension/Nested.php',
    'PHPixie\\ORM\\Model' => $vendorDir . '/phpixie/orm/classes/PHPixie/ORM/Model.php',
    'PHPixie\\ORM\\Result' => $vendorDir . '/phpixie/orm/classes/PHPixie/ORM/Result.php',
    'PHPixie\\Paginate' => $vendorDir . '/phpixie/paginate/classes/PHPixie/Paginate.php',
    'PHPixie\\Paginate\\Pager' => $vendorDir . '/phpixie/paginate/classes/PHPixie/Paginate/Pager.php',
    'PHPixie\\Paginate\\Pager\\ORM' => $vendorDir . '/phpixie/paginate/classes/PHPixie/Paginate/Pager/ORM.php',
    'PHPixie\\Pixie' => $vendorDir . '/phpixie/core/classes/PHPixie/Pixie.php',
    'PHPixie\\Request' => $vendorDir . '/phpixie/core/classes/PHPixie/Request.php',
    'PHPixie\\Response' => $vendorDir . '/phpixie/core/classes/PHPixie/Response.php',
    'PHPixie\\Route' => $vendorDir . '/phpixie/core/classes/PHPixie/Route.php',
    'PHPixie\\Router' => $vendorDir . '/phpixie/core/classes/PHPixie/Router.php',
    'PHPixie\\Session' => $vendorDir . '/phpixie/core/classes/PHPixie/Session.php',
    'PHPixie\\View' => $vendorDir . '/phpixie/core/classes/PHPixie/View.php',
    'PHPixie\\View\\Helper' => $vendorDir . '/phpixie/core/classes/PHPixie/View/Helper.php',
    'PHPixie\\VulnInjection' => $baseDir . '/modules/vulninjection/classes/PHPixie/VulnInjection.php',
    'PHPixie\\VulnInjection\\Service' => $baseDir . '/modules/vulninjection/classes/PHPixie/VulnInjection/Service.php',
    'VulnModule\\Config' => $baseDir . '/modules/vulninjection/classes/VulnModule/Config.php',
    'VulnModule\\Config\\Context' => $baseDir . '/modules/vulninjection/classes/VulnModule/Config/Context.php',
    'VulnModule\\Config\\ModelInfoRepository' => $baseDir . '/modules/vulninjection/classes/VulnModule/Config/ModelInfoRepository.php',
    'VulnModule\\Csrf\\CsrfToken' => $baseDir . '/modules/vulninjection/classes/VulnModule/Csrf/CsrfToken.php',
    'VulnModule\\Csrf\\CsrfTokenManager' => $baseDir . '/modules/vulninjection/classes/VulnModule/Csrf/CsrfTokenManager.php',
    'VulnModule\\Csrf\\TokenStorage' => $baseDir . '/modules/vulninjection/classes/VulnModule/Csrf/TokenStorage.php',
    'VulnModule\\DataType\\ArrayObject' => $baseDir . '/modules/vulninjection/classes/VulnModule/DataType/ArrayObject.php',
    'VulnModule\\VulnInjection' => $baseDir . '/modules/vulninjection/classes/VulnModule/VulnInjection.php',
    'VulnModule\\VulnInjection\\SQLInjectionFiltrator' => $baseDir . '/modules/vulninjection/classes/VulnModule/VulnInjection/SQLInjectionFiltrator.php',
    'VulnModule\\VulnInjection\\Service' => $baseDir . '/modules/vulninjection/classes/VulnModule/VulnInjection/Service.php',
);
