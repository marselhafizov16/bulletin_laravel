<div class="ads">
    <form action="/laravel/bulletin/public/store" method="post">
        @method('PUT') 
        @csrf
        <p>Категория объявления:</p>
        <p><select name="category">
            <option value="Услуги">Услуги</option>
            <option value="Покупка">Покупка</option>
            <option value="Продажа">Продажа</option>
            <option value="Аренда">Аренда</option>
            <option value="Авто">Авто</option>
            <option value="Работа">Работа</option>
            <option value="Животные">Животные</option>
        </select></p>
        <p><textarea name="ad" cols="50" rows="10">Введите объявление</textarea></p>

        <button><input type="submit" value="Подать объявление"></button>
    </form>
</div>