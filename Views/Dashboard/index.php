<div class="sidenav" [ngClass]="collapsed ? 'sidenav-collapsed': ''">
  <div class="logo-container">
    <button class="logo" (click)="toggleCollapse()">
      <img src="/assets/img/icono.png" alt="Texto alternativo de la imagen">
    </button>
    <div class="logo-text" @fadeInOut *ngIf="collapsed">Distriservicios</div>
    <button class="btn-close" @rotate *ngIf="collapsed" (click)="closeSidenav()">
      <i class="fal fa-times close-icon"></i>
    </button>
  </div>
  <ul class="sidenav-nav">
    <li class="sidenav-nav-item" *ngFor="let data of navData">
      <a class="sidenav-nav-link" (click)="handleClick(data)" *ngIf="data.items && data.items.length > 0">
        <i class="sidenav-link-icon" [class]="data.icon"></i>
        <span class="sidenav-link-text" @fadeInOut *ngIf="collapsed">
          {{data.label}}
        </span>
        <i *ngIf="data.items && collapsed" class="menu-collapse-icon"
          [ngClass]="!data.expanded ? 'fal fa-angle-right' : 'fal fa-angle-down'"></i>
      </a>
      <a class="sidenav-nav-link" *ngIf="!data.items || (data.items && data.items.length === 0)"
        [routerLink]="[data.routeLink]" routerLinkActive="active" [routerLinkActiveOptions]="{exact: true}">
        <i class="sidenav-link-icon" [class]="data.icon"></i>
        <span class="sidenav-link-text" @fadeInOut *ngIf="collapsed">
          {{data.label}}
        </span>
      </a>
      <div *ngIf="collapsed && data.items && data.items.length > 0">
        <app-sublevel-menu [data]="data" [collapsed]="collapsed" [multiple]="multiple" [expanded]="data.expanded">
        </app-sublevel-menu>
      </div>
    </li>
  </ul>
</div>