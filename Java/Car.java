public class Car {
    private Integer id;
    private String license;
    private Account driver;
    protected Integer passengers;

    public Car(String license, Account driver){
        this.license = license;
        this.driver = driver;
        
    }

    void printDataCar() {
        if(passengers != null) {
            System.out.println("License: " + license + " Driver: " + driver.name + " Pasajeros: " + passengers);
        }
    }

    public Integer getPassenger() {
        return passengers;
    }

    public void setPassenger(Integer passenger) {
        if(passenger == 4) {
            this.passengers = passenger;
        } else {
            System.out.println("Debes asignar 4 pasajeros");
        }
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getLicense() {
        return license;
    }

    public void setLicense(String license) {
        this.license = license;
    }

    public Account getDriver() {
        return driver;
    }

    public void setDriver(Account driver) {
        this.driver = driver;
    }

    
}