import webservice.ServiceSoap;
import webservice.ServiceSoapService;

public class TestWebService {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		ServiceSoap ws = new ServiceSoapService().getServiceSoapPort();
		System.out.println(ws.listerAdmins());
	}

}