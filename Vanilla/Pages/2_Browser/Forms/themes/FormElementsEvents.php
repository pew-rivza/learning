<script src="/Vanilla/Code/2_Browser/Forms/FormElementsEvents.js"></script>

<div class="theme">
    <h3 id="form-elements-events">События: change, input, cut, copy, paste</h3>
    <div class="task">
        <div class="header">Задача 1</div>
        Создать интерфейс, позволяющий ввести сумму банковского вклада и процент,
        а затем рассчитать, какая это будет сумма через заданный промежуток времени.
        Формула для расчета: Math.round(сумма_банковского_вклада * (1 + годовой_процент
        * промежуток_времени));

        <div class="header">Решение</div>

        <div class="deposit">
            <form name="deposit">
                <fieldset>
                    <label for="first-deposit">Первоначальный депозит (руб.)</label>
                    <input type="number" value="10000" id="first-deposit" name="first-deposit">
                </fieldset>

                <fieldset>
                    <label for="deposit-time">Срок вклада (мес.)</label>
                    <select id="deposit-time" name="deposit-time">
                        <option>3</option>
                        <option>6</option>
                        <option selected>12</option>
                        <option>18</option>
                        <option>24</option>
                        <option>30</option>
                        <option>36</option>
                        <option>60</option>
                    </select>
                </fieldset>

                <fieldset>
                    <label for="interest">Годовая ставка (%)</label>
                    <input type="number" id="interest" value="5" name="interest">
                </fieldset>
            </form>

            <div class="deposit-result">
                <div id="was">
                    Было:<br>
                    <span></span>
                </div>

                <div id="became">
                    Стало:<br>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>