<!-- Форма -->
<div class="form-wrapper">
      <form action="../home.php" method="post">
        <!-- Логин -->
        <label for="login">Логин</label>
        <input type="text" id="login" name="login" />

        <!-- Пароль -->
        <label for="password">Пароль</label>
        <input type="password" id="password" name="password" />

        <!-- Запомнить меня -->
        <div class="input-wrapper">
          <input type="checkbox" id="rememberMe" name="rememberMe" />
          <label for="rememberMe">Запомнить меня</label>
        </div>

        <!-- Submit Button -->
        <div class="btn">
          <button type="submit">Отправить</button>
        </div>
      </form>
    </div>