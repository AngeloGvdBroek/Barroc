using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;
using System.Data;
using MySql.Data.MySqlClient;

namespace barrocFactuur
{
    /// <summary>
    /// Interaction logic for ShowLeases.xaml
    /// </summary>
    public partial class ShowLeases : Window
    {
        MySqlConnection cn;
        MySqlDataAdapter da;
        DataSet ds;
        public ShowLeases()
        {
            InitializeComponent();
        }

        private void Grid_Loaded(object sender, RoutedEventArgs e)
        {
            cn = new MySqlConnection("datasource=localhost;port=3306;Initial Catalog='barroc';username=root;possword=;");
            cn.Open();
            //string sql = "select users.name, invoices.betaald_op, leases.monthly_costs, lease_types.`type` from users join leases on leases.customer_id = users.id join invoices on invoices.lease_id = leases.id join lease_types on leases.lease_type_id = lease_types.id";
        }

        private void invcoicesList_Loaded(object sender, RoutedEventArgs e)
        {
            string connectionstring = "SERVER=localhost;DATABASE=barroc;UID=root;PASSWORD=;";

            MySqlConnection connection = new MySqlConnection(connectionstring);

            MySqlCommand cmd = new MySqlCommand("select users.name, invoices.betaald_op, leases.monthly_costs, lease_types.`type` from users join leases on leases.customer_id = users.id join invoices on invoices.lease_id = leases.id join lease_types on leases.lease_type_id = lease_types.id", connection);
            connection.Open();
            DataTable dt = new DataTable();
            dt.Load(cmd.ExecuteReader());
            connection.Close();

            invcoicesList.DataContext = dt;
        }
    }
}
