<?php

namespace App\Controller\Admin;

use App\Entity\Etablissement;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EtablissementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Etablissement::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nom'),
            TextEditorField::new('description'),
            TextEditorField::new('adresse'),
            TextEditorField::new('ville'),
            //AssociationField::new('Suite'),
            ImageField::new('image')->setBasePath('/assets/uploads/etablissement')
                                    ->setUploadDir('/public/assets/uploads/etablissements/')
        ];
  }
}
