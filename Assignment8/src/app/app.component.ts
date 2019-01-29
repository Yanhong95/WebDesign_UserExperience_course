import {
  Component,
  EventEmitter
} from '@angular/core';

import { Product } from './product.model';

/**
 * @InventoryApp: the top-level component for our application
 */
@Component({
  selector: 'inventory-app-root',
  templateUrl: './app.component.html'
})
export class AppComponent {
  products: Product[];

  constructor() {
    this.products = [
      new Product(
        'S8D9W0F0',
        'NMD_TS1 PRIMEKNIT SHOES',
        '/assets/images/products/NMD_TS1 PRIMEKNIT SHOES.png',
        ['Men', 'Shoes', 'NMD_TS1 Primeknit'],
        200),
      new Product(
        'C0A7F6W8',
        'ULTRABOOST SHOES',
        '/assets/images/products/ULTRABOOST SHOES.png',
        ['Men', 'Shoes', 'Ultraboost'],
        180),
      new Product(
        'F0Q4E6S7',
        'NMD_R1 PRIMEKNIT SHOES',
        '/assets/images/products/NMD_R1 PRIMEKNIT SHOES.png',
        ['Men', 'Shoes', 'NMD_R1 Primeknit'],
        180)
    ];
  }

  productWasSelected(product: Product): void {
    console.log('Product clicked: ', product);
  }
}
