<div class='item'>
            <form action='insert.php' method='post'  enctype='multipart/form-data'>
                <p>Выбирете изображение</p>
                <input type='file' name='src'>
                <p>Введите коллекцию</p>
                <input type='text'  name='collection'>
                <p>Введите название</p>
                <input type='text'  name='name'>
                <p>Введите описание</p>
                <textarea cols='30' rows='10' name='descr'></textarea>
                <p>Введите материал</p>
                <input type='text'  name='material'>
                <p>Введите дизайнера</p>
                <input type='text'  name='designer'>
                <p>Введите стоимость</p>
                <input type='text' name='price'><br>
                <input type='submit' value='Сохранить' name='save'>
            </form>
        </div>