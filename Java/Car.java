public class Car {
    Integer id;
    String license;
    Account driver;
    private Integer passengers;

    public Car(String license, Account driver){
        this.license = license;
        this.driver = driver;
        passengers = 5;
    }

    void printDataCar() {
        System.out.println("License: " + license + " Driver: " + driver.name + " Pasajeros: " + passengers);
    }
}