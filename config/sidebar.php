<?php

return [
   'items' => [
      [
         'label' => 'Overview',
         'url' => '/dashboard',
         'icon' => 'home',
         'hasChild' => false,
      ],
      [
         'label' => 'Kategori Projek',
         'url' => '/category',
         'icon' => 'grid',
         'hasChild' => false,
      ],
      [
         'label' => 'Projek',
         'url' => '/project',
         'icon' => 'layers',
         'hasChild' => true,
         'children' => [
            [
               'label' => 'Daftar Projek',
               'url' => '/project',
               'icon' => '',
            ],
            [
               'label' => 'Review Projek',
               'url' => '/review',
               'icon' => '',
            ],
            [
               'label' => 'Review Testimoni',
               'url' => '/testimoni',
               'icon' => '',
            ],
         ]
      ],
      [
         'label' => 'Transaksi',
         'url' => '/transaction',
         'icon' => 'credit-card',
         'hasChild' => false,
      ],
      [
         'label' => 'Pengaturan Umum',
         'url' => '/general',
         'icon' => 'settings',
         'hasChild' => false,
      ],
      
   ],
];
