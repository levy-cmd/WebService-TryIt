
package webservice;

import javax.xml.bind.annotation.XmlAccessType;
import javax.xml.bind.annotation.XmlAccessorType;
import javax.xml.bind.annotation.XmlType;

@XmlAccessorType(XmlAccessType.FIELD)
@XmlType(name = "supprimerUser", propOrder = {
    "arg0"
})
public class SupprimerUser {

    protected Personne arg0;

    public Personne getArg0() {
        return arg0;
    }

    public void setArg0(Personne value) {
        this.arg0 = value;
    }

}
