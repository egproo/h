<x-filament-panels::page>
<div class="booking-container">
    <h2>تفاصيل الحجز</h2>

    <!-- تفاصيل مزود الخدمة -->
    <div class="booking-section">
        <h3>مزود الخدمة: {{ session('booking_details.provider_id') }}</h3>
        <!-- يمكنك إضافة المزيد من التفاصيل هنا -->
    </div>

    <!-- تفاصيل الخدمة -->
    <div class="booking-section">
        <h3>الخدمة: {{ session('booking_details.service_id') }}</h3>
        <!-- يمكنك إضافة المزيد من التفاصيل هنا -->
    </div>

    <!-- اختيار اليوم والمواعيد -->
    <div class="booking-section">
        <label for="date">اختر اليوم:</label>
        <input type="date" id="date" name="date">
        
        <!-- يمكنك إضافة قائمة منسدلة أو أي واجهة مستخدم أخرى لعرض المواعيد المتاحة هنا -->
    </div>

    <!-- ملاحظات -->
    <div class="booking-section">
        <label for="notes">ملاحظات:</label>
        <textarea id="notes" name="notes" rows="3"></textarea>
    </div>

    <!-- بيانات الفيزا أو الماستر كارد -->
    <div class="booking-section">
        <label for="cardNumber">رقم البطاقة:</label>
        <input type="text" id="cardNumber" name="cardNumber">

        <label for="expiryDate">تاريخ الانتهاء:</label>
        <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY">

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv">
    </div>

    <!-- زر الحجز -->
    <div class="booking-section">
        <button style="background-color: #0056b3;" type="submit">حجز</button>
    </div>
</div>

<style>
    .booking-container {
        width: 80%;
        max-width: 600px;
        margin: 40px auto;
        padding: 20px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .booking-section {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input, textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #e0e0e0;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

</x-filament-panels::page>
