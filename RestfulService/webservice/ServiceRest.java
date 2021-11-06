package webservice;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;

import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

import metier.Article;


@Path("/ServiceRest")
public class ServiceRest {
	private Connection con=null;
	private PreparedStatement st=null;
	private ResultSet rs=null;
	
	public ServiceRest(){
		try
	    {
	       Class.forName("com.mysql.jdbc.Driver");
	 	  con=DriverManager.getConnection("jdbc:mysql://localhost:3306/archilogiciel","root","");
	    }
	    catch(Exception e)
	    {
	    System.out.println(e.getMessage());
	    }
	}
	
	@GET
	@Path("/listerArticles")
	@Produces(value={MediaType.APPLICATION_XML,MediaType.APPLICATION_JSON})
	public ArrayList <Article> listerArticles()
	{
		 ArrayList<Article> liste= new ArrayList<>();
	     try
	     {
	       st=con.prepareStatement("select * from articles");
	       rs=st.executeQuery();
	       while(rs.next())
	         {
	         Article a = new Article();
	           a.setTitre(rs.getString("titre"));
	           a.setContenu(rs.getString("texte"));
	           a.setCategorie(rs.getInt("categorie"));
	           a.setDatePublication(rs.getDate("date"));

	           liste.add(a); 
	         }  
	     }
	     catch(Exception e)
	     {
	        System.out.println(e.getMessage());
	     }
	    return liste;

	}
	

	@Path("{cat}")
	@GET
	@Produces(value={MediaType.APPLICATION_JSON,MediaType.APPLICATION_XML})
		public ArrayList <Article> listerArticlesParCat(@PathParam("cat")int cat)
		{
			 ArrayList<Article> liste= new ArrayList<Article>();
		     try
		     {
		       st=con.prepareStatement("select * from articles, categorie where articles.categorie = ?");
		       st.setInt(1, cat);
		       
		       rs=st.executeQuery();
		       while(rs.next())
		         {
		         Article a = new Article();
		           a.setTitre(rs.getString("titre"));
		           a.setContenu(rs.getString("texte"));
		           a.setCategorie(rs.getInt("categorie"));
		           a.setDatePublication(rs.getDate("date"));

		           liste.add(a); 
		         }  
		     }
		     catch(Exception e)
		     {
		        System.out.println(e.getMessage());
		     }
		    return liste;

		}
	

	

}
