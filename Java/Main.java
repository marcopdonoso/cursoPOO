class Main {
    public static void main(String[] args) {
        UberX uberx = new UberX("AMQ123",new Account("Andres Herrera", "AND123"), "Honda", "Accord");
        uberx.setPassenger(5);
        uberx.printDataCar();

        /*Car car2 = new Car("QWE567", new Account("Andrea Perrera", "PER456"));
        car2.passengers = 3;
        car2.printDataCar();*/
    }
}