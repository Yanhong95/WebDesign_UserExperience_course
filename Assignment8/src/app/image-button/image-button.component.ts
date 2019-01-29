import { Component, Input } from '@angular/core';
import { NgbActiveModal, NgbModal } from '@ng-bootstrap/ng-bootstrap';
import { Product } from '../product.model';

@Component({
  selector: 'ngbd-modal-content',
  templateUrl:'./popup.component.html',

})

export class NgbdModalContent {
  @Input() product;
  constructor(public activeModal: NgbActiveModal) {}
}

@Component({
  selector: 'image-button',
  templateUrl: './image-button.component.html',
})
export class ImageButtonComponent {
  @Input() product: Product;
  constructor(private modalService: NgbModal) {}
  open() {
    const modalRef = this.modalService.open(NgbdModalContent);
    modalRef.componentInstance.product = this.product;
  }
}


