# Techspot - Custom Catalog Grid - Magento 2 Module

The Tech Spot Br Custom Catalog Grid it's a very simple module that adds a Qty Photos column in Admin Catalog Grid.

Although simple this module is very useful for fashion e-commerce for example, as it facilitates the identification of products with the minimum amount of photos required.

--

O Módulo Techspot Custom Catalog Grid para Magento 2 é um módulo muito simples que adiciona uma coluna Qtd Fotos na Grade de Catálogo de Administrador.

Embora simples, este módulo é muito útil por exemplo para e-commerces de moda, pois facilita a identificação de produtos com a quantidade mínima de fotos necessária.

![alt text](http://techspot.com.br/github/customcataloggrid_demo.png)

### Install

Install via composer:

```
cd <your Magento install dir>
composer require techspot/customcataloggrid
php bin/magento module:enable --clear-static-content Techspot_CustomCatalogGrid
php bin/magento setup:static-content:deploy //ou php bin/magento setup:static-content:deploy pt_BR
```

## Authors

* **Bruno Monteiro** - *Initial work* - [TechSpot](https://github.com/techspotbr)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Donation
If this project help you reduce time to develop, you can give me a cup of coffee :) 
Se este projeto te ajudou a reduzir o tempo de desenvolvimento, doe-nos uma xícara de café :()
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=techspot%40techspot%2ecom%2ebr&lc=BR&item_name=TechSpot&currency_code=BRL&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted)

