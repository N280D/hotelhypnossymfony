<?php

namespace App\Controller\Admin;

use App\Entity\Suite;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;

class SuiteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Suite::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('titre'),
            TextEditorField::new('description'),
            MoneyField::new('prix')->setCurrency('EUR'),
            AssociationField::new('etablissement'),
            ImageField::new('image1')->setBasePath('/assets/uploads/suites/')
                                    ->setUploadDir('/public/assets/uploads/suites/'),
            ImageField::new('image2')->setBasePath('/assets/uploads/suites/')
                                    ->setUploadDir('/public/assets/uploads/suites/')                         
        ];
    }
    
}
