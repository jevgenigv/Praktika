/* ------------------------------------------------------------
 * A military factory outside the town has a secret lab where the newest and most
 * dangerous weapons are being developed. They installed a new lock which allowed
 * only white listed visitors to enter the lab. National Security Agency wants you
 * to secretly keep an eye on the lab. The lock is very secure, but there is a loophole
 * which allows you to change the body of one minor method. The change should
 * make the lock open every time you input your name. But remember, you are a secret
 * agent and your name should not appear anywhere in the code. We repeat: Nobody
 * should be able to understand which additional person is allowed to enter the room
 * by looking at the code. Also, don't make the room less secure. Only you and the
 * allowed visitors should be able to open the lock.
 *
 * Make the change to the body of getFullName(String, String) method. Make sure that
 * the test passes with your name in it. Don't worry, the test can contain your name
 * explicitly. The test is provided for convenience and your task is not to trick it into
 * passing but to solve the problem. Send us the link to a GitHub repo with your solution 
 * (full code, please) and explain how your solution works. We expect the solutions 
 * to be sent to sirli.spelman@icefire.ee by the 25th of March 2016 the latest. Please do
 * write "Secret Mission" on the topic line and do not forget to add your CV to the e-mail.
 *
 * Good luck, agent!
 * ------------------------------------------------------------
 */

import java.util.List;
import java.util.Scanner;

import static java.util.Arrays.asList;

public class SecureDoorLock {

    private static final List<String> ALLOWED_VISITORS
            //= asList("John Smith", "Jane Doe", "Ice Cube");
            = asList("3.38817649036546E15", "2.80881373789E12", "2.386886431179E12", "1.08741857419118618E18");

    public boolean shouldOpen(String firstName, String lastName) {
        return ALLOWED_VISITORS.contains(getFullName(firstName, lastName));
    }

    private String getFullName(String firstName, String lastName) {
        // You are only allowed to change the body of this method

        //This method can be used to encrypt the names, but for such really serious
        //object (secret lab) the security is too low. (Handmade method)

        //String[] alphabet = {" ","a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"};
        //String[] digits = {"01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26","27"};
        //String result=firstName+lastName;
        //for (int i = 0; i<alphabet.length;i++){
        //    result=result.toLowerCase().replaceAll(alphabet[i],digits[i]);
        //}
        //String resultMid = new StringBuffer(result).reverse().toString();

        //This is second hand made, which returns more "unique" value.
        int firstHash = firstName.hashCode();
        int lastHash = lastName.hashCode();

        Double cantonNumber = 0.5*(firstHash+lastHash)*(firstHash+lastHash+1)+firstHash;
        String out = Double.toString(cantonNumber);
        return out;

        //return firstName + " " + lastName;


    }

    public static void main(String[] args) {
        SecureDoorLock lock = new SecureDoorLock();
        Scanner scanner = new Scanner(System.in);

        System.out.println("Enter first name: ");
        String firstName = scanner.nextLine();
        System.out.println("Enter last name: ");
        String lastName = scanner.nextLine();

        if (lock.shouldOpen(firstName, lastName)) {
            System.out.println("Welcome inside!");
        } else {
            System.out.println("You shall not pass!");
        }

        String z = "Jevgeni";
        byte[] bytes = z.getBytes();

        int hash = z.hashCode();
    }

}