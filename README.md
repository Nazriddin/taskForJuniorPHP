# Условия задачки
Напишите консольную команду, которая получает два аргумента «имя файла», «тип операции». В решении желательно использовать ООП подход.
Файл, который нужно открыть, содержит строки, имеющие формат:
1 4
6 45
-74 22
-5 12
…

Тип операции: * умножение, / деление, + сложение, - вычитание

Выбранная операция должна примениться к каждой паре чисел в строке и сохранить результаты в 2-х отдельных файлах:
1. Негативные результаты отдельно;
2. Позитивные отдельно.

# Заметки для кода 
- Для запуска кода нужно зайти в путь проекта и набрать php task.php.
- В data.txt можем добавить еще числа, код все равно будет работать
- В sortingAnswers при создании файлов можно a+ заменить на w+, если хотим переписать данные файла с нуля при каждом запуске.
- Также в sortingAnswers достаточно воспользоватся a или w, так как мы только записываем в те файлы.  
