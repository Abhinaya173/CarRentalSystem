from django_q.tasks import schedule
from system.models import Car 

def update_car_data():
    cars_to_update = Car.objects.all()

    for car in cars_to_update:
        new_stock = get_new_stock(car)

        if new_stock != car.content:
            car.content = new_stock
            car.save()
        else:
            pass
        
# Jadwalkan tugas untuk setiap weekdays (Senin sampai Jumat) pukul 00:00
schedule('myapp.tasks.update_car_data', schedule_type='cron', cron='0 0 * * 1-5')
