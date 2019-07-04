@extends('front.layout')

@section('metatags')
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection

@section('content')
<main>
  <section class="profile">
    <h1 class="profile__title"></h1>
    <div class="profile__info">
      <div class="profile__info__avatar">
        <div class="profile__info__avatar__pic" style="background-image: url('/storage/{{Auth::user()->user_image }}')"></div>
      </div>
      <div class="profile__info__data">
        <ul class="profile-data__list">
          <li class="profile-data__list__item">
            <span class="profile-data__list__item__label">Nombre:</span>
            <span class="profile-data__list__item__data">{{ Auth::user()->name }}</span>
          </li>
          <li class="profile-data__list__item">
            <span class="profile-data__list__item__label">Apellido:</span>
            <span class="profile-data__list__item__data">{{ Auth::user()->lastname }}</span>
          </li>
          <li class="profile-data__list__item">
            <span class="profile-data__list__item__label">Mail:</span>
            <span class="profile-data__list__item__data">{{ Auth::user()->email }}</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="change-avatar">
      <form class="change-avatar__form" action="" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <label class="change-avatar__form__label" for="avatar">Cambiar avatar:</label>
        <div>
          <input class="change-avatar__form__input" type="file" id="user_image" class="form-control" name="user_image">
          <button class="change-avatar__form__btn" name="submit" type="submit">Subir</button>
        </div>
        <div class="alert alert-danger" role="alert">No se pudo cargar la imagen
        </div>
      </form>
    </div>
  </section>
</main>
@endsection
