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
using MySql.Data.MySqlClient;

namespace barrocFactuur
{
    /// <summary>
    /// Interaction logic for CreateIncoives.xaml
    /// </summary>
    public partial class CreateIncoives : Window
    {
        MySqlConnection connection = new MySqlConnection("datasource=127.0.0.1;port=3306;username=root;possword=;database=barroc");
        MySqlCommand command;
        DateTime aDate = DateTime.Now;
        public CreateIncoives()
        {
            InitializeComponent();
        }

        public void openConnection()
        {
            if(connection.State == System.Data.ConnectionState.Closed)
            {
                connection.Open();
            }
        }

        public void closeConnection()
        {
            if (connection.State == System.Data.ConnectionState.Open)
            {
                connection.Close();
            }
        }

        public void executeQuery( string query)
        {
            try
            {
                openConnection();
                command = new MySqlCommand(query, connection);
                if(command.ExecuteNonQuery() == 1)
                {
                    MessageBox.Show("query executed");
                }
                else
                {
                    MessageBox.Show("query not exccuted");
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }
            finally
            {
                closeConnection();
            }
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            string insertQuery = "INSERT INTO INVOICES(lease_id,created_at,updated_at) VALUES('"+lease_id.Text+"','"+ aDate.ToString("yyyy-MM-dd") + "','"+ aDate.ToString("yyyy-MM-dd HH:mm:ss") + "','"+ aDate.ToString("yyyy - MM - dd HH: mm:ss") + "' )";
            executeQuery(insertQuery);
        }
    }
}
